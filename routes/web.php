<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $softwareList = array();
    for ($i = 0; $i < 10; $i++) {
        $softwareList[] = [
            'id' => '12323',
            'name' => 'Soft name',
            'developer_id' => '123',
            'developer_name' => 'Developer name',
            'rating' => '4.8',
            'downloads' => '1000+',
            'description' => 'description description description description',
        ];
    }
    return view('index', ['software_list' => $softwareList]);
});

Route::get('/software', function () {
    $softwareList = array();
    for ($i = 0; $i < 10; $i++) {
        $softwareList[] = [
            'id' => '12323',
            'name' => 'Soft name',
            'developer_id' => '123',
            'developer_name' => 'Developer name',
            'rating' => '4.8',
            'downloads' => '1000+',
            'description' => 'description description description description',
        ];
    }
    return view('software', ['software_list' => $softwareList]);
});

Route::get('/devs', function () {
    $developerList = array();
    for ($i = 0; $i < 10; $i++) {
        $developerList[] = [
            'id' => '234',
            'name' => 'Name',
            'rating' => '4.7',
            'downloads' =>  '54634',
            'description' => 'description description description',
        ];
    }
    return view('devs', ['developer_list' => $developerList]);
});

Route::get('/software/{id}', function ($id) {
    $software = [
        'id' => '123 ',
        'name' => 'Soft name',
        'developer_id' => '123',
        'developer_name' => 'Dev name',
        'rating' => '4.9',
        'downloads' => '100+',
        'description' => 'description description description',
        'changelog' => array([
            'description' => 'change 1'
        ],[
            'description' => 'change 2'
        ],[
            'description' => 'change 3'
        ],[
            'description' => 'change 4'
        ],[
            'description' => 'change 5'
        ],),
        'downloads_list' => array([
            'url' => '/downloads/123423',
            'label' => 'Download name',
        ],[
            'url' => '/downloads/123423',
            'label' => 'Download name',
        ],[
            'url' => '/downloads/123423',
            'label' => 'Download name',
        ],[
            'url' => '/downloads/123423',
            'label' => 'Download name',
        ],),
    ];
    return view('software_info', ['software' => $software]);
});

Route::get('/devs/{id}', function ($id) {
    $developer = [
        'name' => 'Name',
        'rating' => 'Rating',
        'downloads' => 'Downloads ',
        'description' => 'Description',
        'products' => array([
            'id' => '123',
            'name' => 'Product name',
        ],[
            'id' => '123',
            'name' => 'Product name',
        ],[
            'id' => '123',
            'name' => 'Product name',
        ],),
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
