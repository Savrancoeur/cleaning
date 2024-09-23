<?php

use App\Events\NotiEvent;
use App\Events\NotifyProcessed;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WorkerController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/form', function () {
    return view('test');
});

Route::post('/form', function (Request $request) {


    $message = request()->message;

    event(new NotiEvent($message));

    return redirect()->back()->with('success', 'Message sent successfully.');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/order/post', [OrderController::class, 'store'])->name('order.store');


// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::get('/workers', [WorkerController::class, 'index']);
});