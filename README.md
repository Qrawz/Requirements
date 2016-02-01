# Requirements
A small library to easily handle detection of minimum system requirements.  
This library require at least **PHP 5.4** to be used.

## Features
* Detects PHP versions
* Detects Zend Engine versions.
* Detects absence of PHP extensions.
* Detects current user.

## Getting Started
```php
// Require Composer autoloader class
require 'vendor/autoload.php';
```

## RequirementChecker sample usage
```php
// Create new instance of RequirementChecker class.
$requirements = new \Scion\Requirements\RequirementChecker();
```

> Find all sample usage in the next wiki section: [RequirementChecker sample usage](https://github.com/Scion-Framework/Requirements/wiki/RequirementChecker-sample-usage).


## License
The files in this archive are released under the [GNU Lesser GPL v3](LICENSE.md) license.
