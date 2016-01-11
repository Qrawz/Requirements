<?php
namespace Scion\Requirements;

class PHPRequirements extends Requirements {

	/**
	 * Check PHP version is greater than $version
	 * @param mixed $version
	 * @return bool
	 */
	public function check($version) {
		return version_compare(
			phpversion(), $version, '>='
		);
	}

	/**
	 * Check extension is loaded
	 * @param string $extension
	 * @return bool
	 */
	public function checkExtension($extension) {
		return extension_loaded($extension);
	}

	/**
	 * Check extensions are loaded
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
}