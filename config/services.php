<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'google' => [
        'client_id' => "350882793922-fk9tef811vg92s21htsbbbd0l54h99ko.apps.googleusercontent.com",
        'client_secret' => "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",
        'redirect' => "http://127.0.0.1:8000/login/gotogooglestore",
    ],
    'linkedin' => [
        'client_id' => "8606kjdjtv8kbv",
        'client_secret' => "RHnHD39RZY4pZKBV",
        'redirect' => "http://127.0.0.1:8000/login/gotolinkedinstore",
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
