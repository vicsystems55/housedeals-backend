<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\AgentProfileController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/listings', [ListingController::class, 'create_listing']);

Route::put('/listings', [ListingController::class, 'update_listing']);

Route::get('/listings', [ListingController::class, 'all_listings']);

Route::get('/notifications', [NotificationsController::class, 'notifications']);

Route::get('/bookings', [BookingController::class, 'bookings']);

Route::post('/bookings', [BookingController::class, 'create_booking']);

Route::post('/update_company_profile', [CompanyProfileController::class, 'update_company_profile']);

Route::post('/update_agent_profile', [AgentProfileController::class, 'update_agent_profile']);


Route::post('/company_profile', [CompanyProfileController::class, 'company_profile']);

Route::post('/agent_profile', [AgentProfileController::class, 'agent_profile']);


Route::post('/register', [ApiAuthController::class, 'register']);

Route::post('/login', [ApiAuthController::class, 'login']);


