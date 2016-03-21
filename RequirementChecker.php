<?php
namespace FlexyProject\Requirements;

class RequirementChecker {

	/**
	 * Check PHP version is greater than $version.
	 * @param mixed $version
	 * @return bool
	 */
	public function check($version) {
		return version_compare(
			phpversion(), $version, '>='
		);
	}

	/**
	 * Check ZendEngine version is greater than $version.
	 * @param mixed $version
	 * @return bool
	 */
	public function checkZendEngine($version) {
		return version_compare(
			zend_version(), $version, '>='
		);
	}

	/**
	 * Check extension is loaded.
	 * @param string $extension
	 * @return bool
	 */
	public function checkExtension($extension) {
		return extension_loaded($extension);
	}

	/**
	 * Check extensions are loaded.
	 * @param array $extensions
	 * @return bool
	 */
	public function checkExtensions(array $extensions) {
		foreach ($extensions as $extension) {
			if (false === $this->checkExtension($extension)) {
				return false;
			}
		}

		return true;
	}

	/**
	 * Check current user is the same as $username.
	 * @param string $username
	 * @return bool
	 */
	public function checkCurrentUser($username) {
		return $username === get_current_user();
	}

	/**
	 * Check current directory is writable.
	 * @param string $dir
	 * @return bool
	 */
	public function checkWritableDir($dir) {
		return is_dir($dir) && is_writable($dir) && !is_file($dir);
	}

	/**
	 * Check if OpCache is enabled.
	 * @return bool
	 */
	public function isOpCacheEnabled() {
		return (bool)opcache_get_configuration()['directives']['opcache.enable'];
	}

	/**
	 * Check OpCache version is greater than $version.
	 * @param string|int $version
	 * @return mixed
	 */
	public function checkOpCacheVersion($version) {
		return version_compare(
			opcache_get_configuration()['version']['version'], $version, '>='
		);
	}
}