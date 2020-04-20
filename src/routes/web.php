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
    return view('index');
});
Route::get('client', 'ClientController@index')->name('addIndex');
Route::get('client/refer', 'ClientController@referGet')->name('addClient');
Route::post('client/create', 'ClientController@create')->name('addIndex');
Route::get('client/accept/{id}', 'ClientController@accept')->name('accept');
Route::get('client/reject/{id}', 'ClientController@reject')->name('reject');

Route::get('clients/refered', 'ClientsController@refered')->name('referedClients');
Route::get('clients/accepted', 'ClientsController@accepted')->name('acceptedClients');
Route::get('clients/rejected', 'ClientsController@rejected')->name('rejectedClients');
