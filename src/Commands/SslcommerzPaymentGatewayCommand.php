<?php

namespace Nanopkg\SslcommerzPaymentGateway\Commands;

use Illuminate\Console\Command;

class SslcommerzPaymentGatewayCommand extends Command
{
    public $signature = 'laravel-sslcommerz-payment-gateway';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
