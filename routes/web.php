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

Route::get('/', [UserController::class, 'index'])->name('user.index');


Auth::routes();

Route::get('send-mail', [MailController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route for service provider
Route::get('/servide_provider/home',  [ServiceController::class, 'index'])->name('service-provider-home');
Route::post('/servide_provider/accept_service/{id?}',  [ServiceController::class, 'acceptService'])->name('service-provider-accept-service');
Route::get('/getacceptservice',  [ServiceController::class, 'getAcceptService'])->name('getacceptservice');




//routes for client side

Route::get('/client/home', function ()
{
    return view('client/home');
})->name('client-home');


//select service
Route::get('/select-service/{service}/{class}', [RequestBookingController::class, 'selectService'])->name('select-service');

Route::post('/selectmap', [RequestBookingController::class, 'selectMap'])->name('selectmap');
Route::post('/requestsent', [RequestBookingController::class, 'requestSent'])->name('requestsent');
Route::get('/waiting', [RequestBookingController::class, 'waiting'])->name('waiting');


//previous records
Route::get('/previousrecords' , [UserController::class, 'previousRecords'])->name('previousrecords');
Route::get('/client-previousrecords' , [UserController::class, 'clientpreviousRecords'])->name('client-previousrecords');
Route::get('/service-provider-previousrecords' , [UserController::class, 'serviceproviderpreviousRecords'])->name('service-provider-previousrecords');

Route::get('/acceptreq', [RequestBookingController::class, 'acceptReq'])->name('acceptreq');

// admin
Route::get('/adminclients' , [UserController::class, 'adminClient'])->name('adminclients');
Route::get('/adminserviceproviders' , [UserController::class, 'adminService'])->name('adminserviceproviders');
Route::get('/allrecords' , [UserController::class, 'allRecords'])->name('allrecords');
Route::get('/deposit' , [UserController::class, 'Deposit'])->name('deposit');

Route::get('/testings' , [UserController::class, 'Testings'])->name('testings');
Route::get('/getTotalPrice', [UserController::class, 'getTotalPrice'])->name('getTotalPrice');

//service provider wallet
Route::get('/walletpay/{id?}' , [RequestBookingController::class, 'walletPay'])->name('walletpay');

//service dashboard
Route::get('/dashboard' , [UserController::class, 'serviceDashboard'])->name('dashboard');


//upload pic
Route::get('image-upload', [ UserController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ UserController::class, 'imageUploadPost' ])->name('image.upload.post');

//ajax post update for request status
Route::post('/getupdate', [RequestBookingController::class, 'getUpdate'])->name('getupdate');

//ajax post Service provider info
Route::post('/getspinfo', [RequestBookingController::class, 'getspInfo'])->name('getspinfo');

//ajax get routes for service provider change status
Route::get('/cancelRequest', [RequestBookingController::class, 'cancelRequest'])->name('cancelRequest');
Route::get('/workRequest', [RequestBookingController::class, 'workRequest'])->name('workRequest');
Route::get('/completeRequest', [RequestBookingController::class, 'completeRequest'])->name('completeRequest');
//after complte request from sp
Route::get('/request-completed', [RequestBookingController::class, 'requestComplete'])->name('requestComplete');

//comments and reviews

Route::post('/comtsreviews', [RequestBookingController::class, 'comtsReviews'])->name('comtsreviews');



Route::get('/demogetupdates', [RequestBookingController::class, 'requestComplete']);