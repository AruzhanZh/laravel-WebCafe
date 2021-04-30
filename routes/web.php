<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',  [MainController::class,'home']);
Route::get('/home',  [MainController::class,'home']);
Route::get('/menu',  [MainController::class,'menu']);
Route::get('/about',  [MainController::class,'about']);
Route::get('/reservation',  [MainController::class,'reservation']);
Route::get('/stuff',  [MainController::class,'stuff']);
Route::get('/statistics',  [MainController::class,'statistics']);
Route::get('/blog',  [MainController::class,'blog']);
Route::get('/blog-details',  [MainController::class,'blog-details']);
Route::get('/contact',  [MainController::class,'contact']);


Route::post('/contact/check',  [MainController::class,'contact_check']);
Route::post('/subscribe/check',  [MainController::class,'subscribe_check']);
Route::post('/reservation/check',  [MainController::class,'reservation_check']);

Route::get('file-upload', [ FileUploadController::class, 'fileUpload' ])->name('file.upload');
Route::post('file-upload', [ FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post');

Route::post('/send-email',[MailSender::class,'sendEmail'])->name('sendEmail');
Route::get('/list',[MailSender::class,'list'])->name('list');

Route::get('/{lang}', [LocalizationController::class,'index']);

Route::get('send-mail', function() {
    $details = [
        'title' => 'Mail from Live Dinner Restaurant',
        'body' => 'Thank you for subscribe!'
    ];

    Mail::to('190103359@stu.sdu.edu.kz')->send(new \App\Mail\Gmail($details));

    dd("Email is sent");
});
