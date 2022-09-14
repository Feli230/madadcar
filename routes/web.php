<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RequestBookingController;

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

Route::get('/', [UserController::class, 'index']);


Auth::routes();

Route::get('send-mail', [MailController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route for service provider
Route::get('/servide_provider/home',  [ServiceController::class, 'index'])->name('service-provider-home');
Route::post('/servide_provider/accept_service/{id?}',  [ServiceController::class, 'acceptService'])->name('service-provider-accept-service');



//routes for client side

Route::get('/client/home', function ()
{
    return view('client/home');
})->name('client-home');


Route::get('/select-service/{service}', [RequestBookingController::class, 'selectService'])->name('select-service');
Route::post('/selectmap', [RequestBookingController::class, 'selectMap'])->name('selectmap');
Route::post('/requestsent', [RequestBookingController::class, 'requestSent'])->name('requestsent');
