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
    return view('accueil');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/dev', function () {
    return view('developpement');
});

Route::get('/ref', function () {
    return view('referencement');
});

Route::get('/pagepayment', function () {
    return view('avant-payment');
});

Route::post('avantpayment', 'PaymentController@store')->name('avantpayment');

Route::post('payment', 'PaymentController@achat')->name('payment');
