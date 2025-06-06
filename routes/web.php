<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $topSoftware = array();

    for ($i = 0; $i < 10; $i++) {
        $topSoftware[] = [
            'id' => $i,
            'name' => 'software ' . $i,
            'description' => 'description description description description description description description description description description ' . $i,
            'developer_id' => $i,
            'developer_name' => 'developer ' . $i,
            'rating' => '4.8',
            'downloads' => '1000+',
        ];
    }
    return view('index', ['top_software' => $topSoftware]);
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/devs', function () {
    return view('devs');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/software', function () {
    return view('software');
});
