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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '224820970107-3ighd8fvmam6kh7qv8rf1jouj3uju4cm.apps.googleusercontent.com',
        'client_secret' => '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',
        //'redirect' => 'http://f9f5-12-1-129-7.ngrok.io/callback/google',
        'redirect' => 'http://d739-2603-6080-4d0a-8600-705c-4837-524d-b7d2.ngrok.io/pages/home-page',
      ], 

];
