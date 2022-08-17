<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', LoginController::class . '@showLoginForm')->name('login');
Route::post('/login', LoginController::class . '@login')->name('login.store');

Route::group(['middleware' => ['auth','CekRole:admin,karyawan']], function() {
    return "tes";
} );
