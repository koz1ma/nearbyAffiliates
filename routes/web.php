<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
//this route is to get only the json with result(In case you want to consume the route as an API)
Route::get('/', [AppController::class, 'getAffiliates']);
//this route is for the view rendering
Route::get('file-upload', [AppController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [AppController::class, 'fileUploadPost'])->name('file.upload.post');
