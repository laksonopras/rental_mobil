<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('catalog');
// });
Route::get('/ourContact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/order', function () {
    return view('order');
});


Route::get('/register',  [AuthController::class, "register"]);
Route::get('/login',  [AuthController::class, "login"])->name('login');

Route::post('/login', [AuthController::class, "doLogin"]);
Route::post('/register', [AuthController::class, "doRegister"]);

Route::middleware(['auth:web'])->group(function () {

    Route::get('/index', [CarController::class, "index"]);

    Route::get('/logout', [AuthController::class, "logout"]);
    Route::put('/update', [AuthController::class, "update"]);
    Route::get('/edit', [AuthController::class, "edit"]);
    Route::get('/deletePhoto', [AuthController::class, "deletePhoto"]);

    Route::post('/car', [CarController::class, 'store']);
    Route::put('/car/{id}', [CarController::class, 'update']);
    Route::get('/car/delete/{id}', [CarController::class, 'destroy']);

    Route::get('orderAll', [OrderController::class, 'index']);

    Route::get('/user', [AuthController::class, 'index']);
});
