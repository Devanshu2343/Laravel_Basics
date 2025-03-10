<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // return view ('folderName.(dot)fileName') ;
    return view('about.about' , ["name" => "Dev"]);
});
