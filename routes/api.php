<?php

use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\QueueController;
use App\Http\Controllers\Api\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('api_search', SearchController::class)->name('api_search');
////
//Route::get('mailtest', function () {
//    Mail::to('ololo@mail.ru')
//        ->send(new \App\Mail\DemoEmail('NEW MESSAGE'));
//});

//Route::get('sendemail', EmailController::class);

Route::get('send-email', QueueController::class);

//Route::get('/test', function (){
//dump('jshgjkd');
//});


//
//Route::apiResource('brands', \App\Models\Brand::class);
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
