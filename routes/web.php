<?php

use Illuminate\Support\Facades\Auth;
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

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/game/{id}/detail', 'detail');
    Route::get('/game/{id}/checkout/{credit_id}', 'checkout');
    Route::post('/game/checkout', 'checkout_now');
    Route::get('/trx/{txid}/detail', 'checkout_detail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
