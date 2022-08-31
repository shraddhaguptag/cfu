<?php

use Illuminate\Support\Facades\Route;

#Controllers
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;

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

//contact form routes
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'save'])->name('contact.store');

//file upload routes
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
