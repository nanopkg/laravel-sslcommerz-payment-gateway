<?php

namespace Nanopkg\SslcommerzPaymentGateway;

use Nanopkg\SslcommerzPaymentGateway\Commands\SslcommerzPaymentGatewayCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SslcommerzPaymentGatewayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sslcommerz-payment-gateway')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-sslcommerz-payment-gateway_table')
            ->hasCommand(SslcommerzPaymentGatewayCommand::class);
    }
}
