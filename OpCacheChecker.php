<?php
namespace FlexyProject\Requirements;

class OpCacheChecker extends AbstractChecker {

	/**
	 * OpCacheChecker constructor.
	 * @param string|null $baseVersion
	 */
	public function __construct($baseVersion = null) {
		if (null === $baseVersion) {
			$baseVersion = opcache_get_configuration()['version']['version'];
		}
		$this->baseVersion = $baseVersion;
	}

	/**
	 * Check if OpCache is enabled.
	 * @return bool
	 */
	public function isEnabled() {
		return (bool)opcache_get_configuration()['directives']['opcache.enable'];
	}
}