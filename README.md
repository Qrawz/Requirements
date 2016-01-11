# Requirements
A small library to easily handle detection of minimum system requirements.

## Features
* Detects PHP versions
* Detects absence of PHP extensions.

## Getting Started
First, we create a new instance of `PHPRequirements` class to check requirements. 
```php
$phpRequirements = new \Scion\Requirements\PHPRequirements();
```

You can now call the `check()` method to check the minimum PHP version installed in your server.
```php
if ($phpRequirements->check('7.0.1')) {
	// minimum php requirements satisfied
}
```

You can also check if a PHP extension is loaded by your PHP.
```php
if ($phpRequirements->checkExtension('mysqli')) {
	// mysqli extension is loaded
}
```

You can check multiple extensions using the next code:
```php
if ($phpRequirements->checkExtensions(array('mysqli', 'sqlite3'))) {
	// mysqli and sqlite3 extension are loaded
}
```

## License
The files in this archive are released under the [GNU Lesser GPL v3](LICENSE.md) license.
