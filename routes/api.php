<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'api\Auth\LoginController@login');
Route::post('register', 'api\Auth\RegisterController@register');

Route::group(['middleware' => ['auth:api']], function () {
    Route::apiResource('/user', 'api\UserController');
    Route::post('logout','api\Auth\LoginController@logout');

});
