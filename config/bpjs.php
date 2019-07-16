<?php

return [
    'cons_id'      => env('BPJS_CONS_ID', '123456789'), // consumer id
    'secret_key'   => env('BPJS_SECRET_KEY', 'secret'), // consumer secret key
    'username'     => env('BPJS_USERNAME', 'username'), //
    'password'     => env('BPJS_PASSWORD', 'password'),
    'app_code'     => env('BPJS_APP_CODE', '095'), // kode aplikasi
    'base_url'     => env('BPJS_BASE_URL', 'https://dvlp.bpjs-kesehatan.go.id:9081'), // base url aplikasi
    'service_name' => env('BPJS_SERVICE_NAME', 'pcare-rest-v3.0'),
];
