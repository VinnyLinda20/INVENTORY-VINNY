<?php

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
    return view('welcome');
});

Route::get('/{name}/{nrp}', function($name,$nrp) {
    echo "Hello". "Nama". $name. "nrp".$nrp;
})->where('name', '[A-Za-z]+') ->where('nrp', '[0-9]+');

Route::get('/{nrp}/{name}', function($nrp,$name) {
    echo "Hello". "nrp". $nrp. "nama".$nama;
})->where('nrp', '[0-9]+') ->where('name', '[A-Za-z]+');

Route::get('/cekbilangan/{bilangan}', function($bilangan) {
    if($bilangan %2 == 0)
        return "Bilangan tersebut Genap";
    }else{
        return "Bilangan tersebut Ganjil";
    }
});