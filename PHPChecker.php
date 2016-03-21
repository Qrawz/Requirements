<?php
namespace FlexyProject\Requirements;

class PHPChecker extends AbstractChecker {

	/**
	 * PHPChecker constructor.
	 * @param string $baseVersion
	 */
	public function __construct($baseVersion = PHP_VERSION) {
		$this->baseVersion = $baseVersion;
	}
}