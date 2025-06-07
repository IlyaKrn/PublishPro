<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $softwareList = array();
    for ($i = 0; $i < 10; $i++) {
        $softwareList[] = [
            'id' => $i,
            'name' => 'software ' . $i,
            'description' => 'description description description description description description description description description description ' . $i,
            'developer_id' => $i,
            'developer_name' => 'developer ' . $i,
            'rating' => '4.8',
            'downloads' => '1000+',
        ];
    }
    return view('index', ['software_list' => $softwareList]);
});

Route::get('/software', function () {
    $softwareList = array();
    for ($i = 0; $i < 10; $i++) {
        $softwareList[] = [
            'id' => $i,
            'name' => 'software ' . $i,
            'description' => 'description description description description description description description description description description ' . $i,
            'developer_id' => $i,
            'developer_name' => 'developer ' . $i,
            'rating' => '4.8',
            'downloads' => '1000+',
        ];
    }
    return view('software', ['software_list' => $softwareList]);
});

Route::get('/devs', function () {
    $developerList = array();
    for ($i = 0; $i < 10; $i++) {
        $developerList[] = [
            'description' => $i,
            'id' => 'software ' . $i,
            'name' => 'description description description description description description description description description description ' . $i,
            'rating' => $i,
            'downloads' => 'developer ' . $i,
        ];
    }
    return view('devs', ['developer_list' => $developerList]);
});

Route::get('/software/{id}', function ($id) {
    $software = [
        'description' => 'wareawrgfearfg',
        'id' => 'software ',
        'name' => 'description description description description description description description description description description ',
        'developer_id' => 'software ',
        'developer_name' => 'description description description description description description description description description description ',
        'rating' => 'sdfgdg',
        'downloads' => 'developer ',
        'chanlelog' => array(),
        'downloads_list' => array(),
    ];
    return view('software_info', ['software' => $software]);
});

Route::get('/devs/{id}', function ($id) {
    $developer = [
        'description' => 'wareawrgfearfg',
        'id' => 'software ',
        'name' => 'description description description description description description description description description description ',
         'rating' => 'sdfgdg',
        'downloads' => 'developer ',
        'products' => array(),
    ];
    return view('dev_info', ['developer' => $developer]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/about-us', function () {
    return view('about-us');
});
