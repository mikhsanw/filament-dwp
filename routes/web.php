<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //redirect to url
    return redirect()->to('admin/login');
});
