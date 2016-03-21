<?php
namespace FlexyProject\Requirements;

class DirectoryChecker {

	/**
	 * Check current directory is writable.
	 * @param string $dir
	 * @return bool
	 */
	public static function isWritableDir($dir) {
		return is_dir($dir) && is_writable($dir) && !is_file($dir);
	}
}