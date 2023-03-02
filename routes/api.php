<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\StoreSubscriberController;
use App\Http\Controllers\WebSitePostsController;
use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//
//Route::get('test/{websiteId}', function (Request $request, $websiteId) {
//    dd($websiteId);
//    dd($request->get('username'));
//});
//
////Route::post('subscribe', [\App\Http\Controllers\SubscriptionController::class, 'subscribe']);
//
//
//Route::get('subscribers/{subscribers}', function (Request $request, $subs) {
//    dd($subs);
//});


Route::get('subscribers', [WebSitePostsController::class, 'index']);
//Route::get('subscribers/{subs}', function (Request $request, $hg) {
//    dd($hg);
//});
Route::post('subscriber/create', [StoreSubscriberController::class, 'store']);
Route::post('posts/sport', [SportController::class, 'store']);
Route::post('posts/news', [NewsController::class, 'store']);
