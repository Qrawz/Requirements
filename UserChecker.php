<?php
namespace FlexyProject\Requirements;

class UserChecker {

	/**
	 * Check current user is the same as $username.
	 * @param string $username
	 * @return bool
	 */
	public static function checkCurrentUser($username) {
		return $username === get_current_user();
	}
}