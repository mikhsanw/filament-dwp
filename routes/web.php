<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //redirect to
    return redirect()->route('admin.login');
});
