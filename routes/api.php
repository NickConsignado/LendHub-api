<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BorrowingController;
use App\Http\Controllers\Api\DescriptionController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// route, end point, api route

Route::get('/sample', function () {
    return json_encode(array(
        "data" => [
            array(
                "id" => 1,
                "name" => "sample 1",
            ),
            array(
                "id" => 2,
                "name" => "sample 2",
            )
        ]
    ));
});

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('admins', AdminController::class);
    Route::apiResource('tags', TagController::class);
    Route::apiResource('descriptions', DescriptionController::class);
    Route::apiResource('books', BookController::class);
    Route::apiResource('borrowings', BorrowingController::class);
});
