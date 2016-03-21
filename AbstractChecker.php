<?php
namespace FlexyProject\Requirements;

abstract class AbstractChecker {

	/** Properties */
	protected $baseVersion;

	/**
	 * Class constructor.
	 * @param string $baseVersion
	 */
	abstract public function __construct($baseVersion);

	/**
	 * Check $version is lower than baseVersion.
	 * @param string $version
	 * @return mixed
	 */
	public function lower($version) {
		return version_compare($this->baseVersion, $version, '<');
	}

	/**
	 * Check $version is lower or equal than baseVersion.
	 * @param string $version
	 * @return mixed
	 */
	public function lowerOrEqual($version) {
		return version_compare($this->baseVersion, $version, '<=');
	}

	/**
	 * Check $version is greater than baseVersion.
	 * @param string $version
	 * @return mixed
	 */
	public function greater($version) {
		return version_compare($this->baseVersion, $version, '>');
	}

	/**
	 * Check $version is greater or equal than baseVersion.
	 * @param string $version
	 * @return mixed
	 */
	public function greaterOrEqual($version) {
		return version_compare($this->baseVersion, $version, '>=');
	}

	/**
	 * Check $version is equal than baseVersion.
	 * @param string $version
	 * @return mixed
	 */
	public function equal($version) {
		return version_compare($this->baseVersion, $version, '==');
	}
}