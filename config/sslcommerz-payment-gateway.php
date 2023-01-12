<?php

// config for Nanopkg/SslcommerzPaymentGateway
return [
    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway Mode
    |--------------------------------------------------------------------------
    |
    | This value is the mode of your laravel-sslcommerz-payment-gateway api integration.
    | sandbox: for testing purpose
    | live: for live sms sending
    |
    */
    'mode' => env('SSLCOMMERZ_MODE', 'sandbox'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway Store Id
    |--------------------------------------------------------------------------
    |
    | This value is the store id of your sslcommerz-payment-gateway. This
    | value is used to authenticate the store api.
    |
    */
    'store_id' => env('SSLCOMMERZ_STORE_ID', NULL),

    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway Store Password
    |--------------------------------------------------------------------------
    |
    | This value is the store password of your sslcommerz-payment-gateway. This
    | value is used to authenticate the store api.
    |
    */
    'store_id' => env('SSLCOMMERZ_STORE_ID', NULL),

    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway Url
    |--------------------------------------------------------------------------
    | This value is the url of your sslcommerz-payment-gateway. This
    | value is used when need api url.
    |
    */
    'api_url' => [
        // for sandbox api url
        'sandbox' => 'https://sandbox.sslcommerz.com/gwprocess/v3/api.php',
        // for live api url
        'live' => 'https://securepay.sslcommerz.com/gwprocess/v3/api.php',
        // for init payment api url
        'make_payment' => '/gwprocess/v4/api.php',
        // for checkering transaction status api url
        'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
        // for order validate
        'order_validate' => "/validator/api/validationserverAPI.php",
        // for refund payment
        'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
        // for checking refund status
        'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway Api domain
    |--------------------------------------------------------------------------
    | This value is the api domain of your sslcommerz-payment-gateway. This
    | value is used when need api domain url.
    |
    */
    'api_domain' => config('sslcommerz-payment-gateway.mode') == 'sandbox' ? config('sslcommerz-payment-gateway.api_url.sandbox')  :  config('sslcommerz-payment-gateway.api_url.live'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway SSL VERIFY
    |--------------------------------------------------------------------------
    |
    | This value is the ssl verify of your sslcommerz-payment-gateway. This value
    | is used to verify the sslcommerz-payment-gateway api.
    |
    */
    'url_verify' => env('SSLCOMMERZ_URL_VERIFY', false),

    /*
    |--------------------------------------------------------------------------
    | Laravel Sslcommerz Payment Gateway Callback Url
    |--------------------------------------------------------------------------
    | This value is the callback url of your sslcommerz-payment-gateway. T
    |
    */
    'callback_url' => [
        // for success callback url
        'success' => 'sslcommerz/success',
        // for fail callback url
        'fail' => 'sslcommerz/fail',
        // for cancel callback url
        'cancel' => 'sslcommerz/cancel',
        // for ipn callback url
        'ipn' => 'sslcommerz/ipn',
    ],




];
