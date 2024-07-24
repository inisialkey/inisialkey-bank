<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DataPlanController;
use App\Http\Controllers\Api\OperartorCardController;
use App\Http\Controllers\Api\PaymentMethodController;
use App\Http\Controllers\Api\TopUpController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\TransferController;
use App\Http\Controllers\Api\TransferHistoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WebhookController;

// Route::middleware('jwt.verify')->get('test', function (Request $request) {
//     return "success";
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('is-email-exist', [UserController::class, 'isEmailExist']);

Route::post('webhooks', [WebhookController::class, 'update']);

Route::group(['middleware' => 'jwt.verify'], function ($router) {
    Route::post('top_ups', [TopUpController::class, 'store']);

    Route::post('transfers', [TransferController::class, 'store']);

    Route::post('data_plans', [DataPlanController::class, 'store']);

    Route::get('operator_cards', [OperartorCardController::class, 'index']);

    Route::get('payment_methods', [PaymentMethodController::class, 'index']);

    Route::get('transfer_histories', [TransferHistoryController::class, 'index']);

    Route::get('transactions', [TransactionController::class, 'index']);

    Route::get('users', [UserController::class, 'show']);

    Route::get('users/{username}', [UserController::class, 'getUserByUsername']);

    Route::put('users', [UserController::class, 'update']);
});
