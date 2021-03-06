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
    return view('welcome');
});

use Illuminate\Routing\Router;
//memanggil file index yang ada pada folder barang
Route::get('barang/','BarangController@index');
//memanggil file add yang ada pada folder barang
Route::get('barang/add','BarangController@add');
Route::post('barang/addProcess','BarangController@addProcess');

Route::get('/{name}/{nrp}', function($name,$nrp) {
    echo "Hello". "Nama". $name. "nrp".$nrp;
})->where('name', '[A-Za-z]+') ->where('nrp', '[0-9]+');

Route::get('/{nrp}/{name}', function($nrp,$name) {
    echo "Hello". "nrp". $nrp. "nama".$nama;
})->where('nrp', '[0-9]+') ->where('name', '[A-Za-z]+');


Route :: get('/homepage', function () {
    return view('home');
});

Route :: get('/homepage', function () {
    return view('home' , ["name" => "Vinny Lindawaty"]);
});

Route :: get('/person', "PersonController@index"); 

Route :: get('/person/add', 'PersonController@add');
Route :: post('/person/addProcess', 'PersonController@addProcess');

