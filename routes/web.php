<?php

use App\Http\Controllers\MuestraController;
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

Route::group(['prefix' => 'muestra'], function(){
    Route::get('/', 'MuestraController@index');
    Route::get('detail/{id}', 'MuestraController@detail');
    Route::get('create', 'MuestraController@create');
    Route::post('save', 'MuestraController@save');
    Route::get('delete/{id}', 'MuestraController@delete');
    Route::get('update/{id}', 'MuestraController@update');
    Route::post('doUpdate', 'MuestraController@doUpdate');
});

Route::group(Array('prefix' => 'ensayo'), function(){
    Route::get('/{filter?}', 'EnsayoController@index');
    Route::post('/byDate', 'EnsayoController@filterByDate')->name('byDate');
});