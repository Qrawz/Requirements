<?php
namespace FlexyProject\Requirements;

class ExtensionChecker {

	/**
	 * Check extension is loaded.
	 * @param string|array $extension
	 * @return bool
	 */
	public static function check($extension) {
		if (is_array($extension)) {
			foreach ($extension as $ext) {
				if (false === extension_loaded($ext)) {
					return false;
				}
			}

			return true;
		}

		return extension_loaded($extension);
	}
}