<?php

use Illuminate\Http\Request;
use Laravel\Passport\Passport;

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
Route::group(array('domain' => 'api.rondcoin.ovh'), function(){

    Route::resource('offer', 'OfferApiController');
});
#->middleware('auth:api');
#Route::get('/user', function (Request $request) {
#    return $request->user();
#});
