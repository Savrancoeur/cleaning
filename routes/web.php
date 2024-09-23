<?php

use App\Events\NotiEvent;
use App\Events\NotifyProcessed;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WorkerController;
use App\Http\Middleware\isAdmin;
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
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::resource('categories', CategoryController::class);
    Route::resource('workers', WorkerController::class);
    Route::resource('orders', OrderController::class);
});



Route::get('/auth/login', [AuthController::class, 'loginIndex']);
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/auth/register', [AuthController::class, 'index']);
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');