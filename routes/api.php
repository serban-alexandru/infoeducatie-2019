<?php

use Illuminate\Http\Request;

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

Route::get('/search', 'UserAPISearchbarController@search');

Route::post('/find_user_by_phone_number', 'UserLoginController@find_user_by_phone_number');

Route::post('/user/account/add', 'UserRegisterController@adddAcount');

Route::post('/user/login/sms/send', 'UserLoginController@sendSms');

Route::get('/test', function() {
    return json_encode([
        'success' => Auth::user()
    ]);
});



// API routes for logged users
// Route::group(['middleware' => ['auth']], function () {

    // Route::get('/user/cart', 'UserCartController@get');

    // Route::post('/user/cart/update', 'UserCartController@update');
    //
    // Route::post('/user/cart/item/delete', 'UserCartController@deleteItem');
// });


Route::post('create-payment/{id}', 'PaymentController@createPayment');

Route::post('execute-payment/{id}', 'PaymentController@executePayment');
