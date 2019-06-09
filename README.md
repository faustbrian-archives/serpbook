# SerpBook PHP Client

[![Build Status](https://img.shields.io/travis/plients/SerpBook-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/SerpBook-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/serpbook.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/SerpBook-PHP-Client.svg?style=flat-square)](https://github.com/plients/SerpBook-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/SerpBook-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/SerpBook-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/serpbook
```

## Usage

```php
<?php

use Plients\Config;

$client = new Plients\SerpBook\Client();
$client->setConfig([
    'key' => 'YOUR_API_KEY',
    'email' => 'YOUR_EMAIL'
]);

try {
    $response = $client->api('Categories')->all();

    dd($response);
} catch (Exception $e) {
    dd($e);
}
```

## Testing

```bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

-   [Brian Faust](https://github.com/faustbrian)
-   [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
