<?php
namespace FlexyProject\Requirements;

class ZendEngineChecker extends AbstractChecker {

	/**
	 * ZendEngineChecker constructor.
	 * @param string|null $baseVersion
	 */
	public function __construct($baseVersion = null) {
		if (null === $baseVersion) {
			$baseVersion = zend_version();
		}
		$this->baseVersion = $baseVersion;
	}
}