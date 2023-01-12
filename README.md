# laravel-sslcommerz-payment-gateway is a payment gateway integration for sslcommerz.com that makes it easy to integrate and use in your Laravel application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nanopkg/laravel-sslcommerz-payment-gateway.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-sslcommerz-payment-gateway)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nanopkg/laravel-sslcommerz-payment-gateway/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nanopkg/laravel-sslcommerz-payment-gateway/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nanopkg/laravel-sslcommerz-payment-gateway/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nanopkg/laravel-sslcommerz-payment-gateway/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nanopkg/laravel-sslcommerz-payment-gateway.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-sslcommerz-payment-gateway)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require nanopkg/laravel-sslcommerz-payment-gateway
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-sslcommerz-payment-gateway-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-sslcommerz-payment-gateway-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-sslcommerz-payment-gateway-views"
```

## Usage

```php
$sslcommerzPaymentGateway = new Nanopkg\SslcommerzPaymentGateway();
echo $sslcommerzPaymentGateway->echoPhrase('Hello, Nanopkg!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [IQBAL HASAN](https://github.com/nanopkg)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
