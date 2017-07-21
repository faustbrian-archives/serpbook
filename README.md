# SerpBook PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/serpbook-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\SerpBook\Client();
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

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
