<?php
namespace Scion\Requirements;

abstract class Requirements {

	/**
	 * Check PHP version is greater than $version
	 * @param mixed $version
	 * @return bool
	 */
	abstract public function check($version);
}