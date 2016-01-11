# Requirements
A small library to easily handle detection of minimum system requirements.

## Features
* Detects PHP versions
* Detects absence of PHP extensions.

## Getting Started
```
<?php
$phpRequirements = new \Scion\Requirements\PHPRequirements();

if ($phpRequirements->check('7.0.1')) {
	// minimum php requirements satisfied
}
```

## License
The files in this archive are released under the [GNU Lesser GPL v3](LICENSE.md) license.
