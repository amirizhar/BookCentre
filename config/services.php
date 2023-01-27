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
        'apiKey'=> "AIzaSyBZeQY2IS6ohN1FCcTn-_yTefCfTk1w1gs",
        'authDomain'=> "bookcentre-21891.firebaseapp.com",
        'databaseURL'=> "https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app",
        'projectId'=> "bookcentre-21891",
        'storageBucket'=> "bookcentre-21891.appspot.com",
        'messagingSenderId'=> "573036855415",
        'appId'=> "1:573036855415:web:cf1e7983aa8a621d7a8672",
    ],
    

];
