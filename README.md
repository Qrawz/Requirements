# Requirements
A small library to easily handle detection of minimum system requirements.

## Features
* Detects PHP versions
* Detects Zend Engine versions.
* Detects absence of PHP extensions.
* Detects current user.

## Getting Started
* First, we create a new instance of `PHPRequirements` class to check requirements. 
```php
$phpRequirements = new \Scion\Requirements\PHPRequirements();
```

* You can now call the `check()` method to check the minimum PHP version installed in your server, like:
```php
if ($phpRequirements->check('7.0.1')) {
	// minimum php requirements satisfied
}
```

* You can also check if a PHP extension is loaded by your PHP, like:
```php
if ($phpRequirements->checkExtension('mysqli')) {
	// mysqli extension is loaded
}
```

* You can check multiple extensions using the next code:
```php
if ($phpRequirements->checkExtensions(array('mysqli', 'sqlite3'))) {
	// mysqli and sqlite3 extension are loaded
}
```

* You can check the current user executing the PHP script, like:
```php
if ($phpRequirements->checkCurrentUser('root')) {
	// root is executing this PHP script
}
```

* You can check the Zend Engine version, like:
```php
if ($phpRequirements->checkZendEngine('3.0')) {
	// Zend Engine is greater or equal to 3.0
}
```

## License
The files in this archive are released under the [GNU Lesser GPL v3](LICENSE.md) license.
