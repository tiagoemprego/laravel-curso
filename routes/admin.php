<?php

use Illuminate\Routing\Route;

Route::get('/admin', function (){
    return view('index');
});
