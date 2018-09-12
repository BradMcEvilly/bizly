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
Route::get('/bizly_events', 'BizlyEventController@index');
Route::get('/bizly_users', 'BizlyUserController@index');
Route::get('/bizly_event_types', 'BizlyEventTypeController@index');
Route::get('/attendees', 'AttendeeController@index');
Route::get('/venues', 'VenueController@index');
Route::get('/venue_types', 'VenueTypeController@index');
Route::get('/locations', 'LocationController@index');
Route::get('/bookings', 'BookingController@index');
Route::get('/inventories', 'InventoryController@index');
