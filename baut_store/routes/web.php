<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('validation_page/valid');
});
Route::get('/dashboard',function(){
    return view('dashboard_page/dashboard');
});
