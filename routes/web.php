<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Добро пожаловать';
});

Route::get('/index/{name}', fn (string $name) => 'Добро пожаловать, '.$name);

Route::get('/catalog', fn () => 'Каталог');
