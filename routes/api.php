<?php

use App\Http\Controllers\API\PaymentController;
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
Route::group(['middleware' => 'cors'], function () {
    Route::apiResources(
        [
            'home' => \App\Http\Controllers\API\HomeController::class,
            'grade' => \App\Http\Controllers\API\GradeController::class,
            'section' => \App\Http\Controllers\API\SectionController::class,
            'settings' => \App\Http\Controllers\API\SettingsController::class,
            'contact' => \App\Http\Controllers\API\ContactController::class,
            'policy' => \App\Http\Controllers\API\PolicyController::class,
//            'create' => \App\Http\Controllers\API\PaymentController::class,
//            'callback' => \App\Http\Controllers\API\PaymentController::class,
        ]
    );
});

// Оплата
Route::match(['GET', 'POST'], 'payments/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('create', [PaymentController::class, 'create'])->name('payment.create');

Route::redirect('/login', '/admin/login')->name('login');



