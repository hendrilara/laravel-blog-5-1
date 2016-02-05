<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id'     => 'a3853553f410f52bcf03',
        'client_secret' => '815f6cc608fdad5075f3ebf48d6f2f7af4469312',
        'redirect'      => 'http://localhost:8000/auth/github/callback'
    ],

    'facebook' => [
        'client_id'     =>  '112622805786801',
        'client_secret' =>  '95018746316aa52a75a5c37fb426fe31',
        'redirect'      =>  'http://localhost:8000/auth/facebook/callback',
    ],     

    'google' => [
        'client_id'     => '161489138420-c9mnhagub388g76btmjujolk506uucmb.apps.googleusercontent.com',
        'client_secret' => 'RJK0Hwp6RCZBaO8HlEJ7paXH',
        'redirect'      => 'http://localhost:8000/auth/google/callback',
     ],

];
