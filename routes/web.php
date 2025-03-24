<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});

Route::get('/name/{name}', function ($name) {
    return "Hello $name";
});

Route::get('/items/{item}', [ItemController::class, 'menampilkanItems']);
