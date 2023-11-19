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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'apiKey' => "AIzaSyDnzlW36a9CbiUNtoM2T5qAJQxvvNYo-zA",
        'authDomain' => "astroguru-75d26.firebaseapp.com",
        'databaseURL' => "https://astroguru-75d26-default-rtdb.firebaseio.com",
        'projectId' => "astroguru-75d26",
        'storageBucket' => "astroguru-75d26.appspot.com",
        'messagingSenderId' => "665794319149",
        'appId' => "1:665794319149:web:8cebdb696cdcee7e08b9a4",
        'measurementId' => "G-XRMVXVM9M7",
    ],
];
