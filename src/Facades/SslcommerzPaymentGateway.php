<?php

namespace Nanopkg\SslcommerzPaymentGateway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nanopkg\SslcommerzPaymentGateway\SslcommerzPaymentGateway
 */
class SslcommerzPaymentGateway extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\SslcommerzPaymentGateway\SslcommerzPaymentGateway::class;
    }
}
