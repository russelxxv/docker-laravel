<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * ############## Public routes
 */
Route::get('/', function () {
    return view("index");
});

Route::get('/login', function () {
    return view("login");
})->name('login');

Route::resource('register', RegisterController::class, ['only' => ['index', 'store']]);
// Route::get('/register', function () {
//     return view("register");
// })->name('register');
/**
 * ###### End Public routes
 */