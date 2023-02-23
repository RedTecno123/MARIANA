<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

//Codificacion Dani
use App\Http\Controllers\PageController;

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


/*Vista principal */
Route::get('/', function () {
    return view('welcome');
});

/*Vista servicios */
Route::get('/servicios', function(){
    return view('servicios');
});

/*Vista catalogo */
Route::get('/catalogo', function(){
    return view('catalogo');
});

Route::get('/paypal', function(){
    return view('paypal');
});

Route::get('/prueba', function(){
    return view('prueba');
});

/*Route::get('/auto', function() {
    return view('auto.index');
});

Route::get('/auto/create',[AutoController::class,'create']);
*/

/*Vistas CRUD - Administrador */
Route::resource('auto',AutoController::class);



Route::get('/home', function () {
    return view('home');
});

/*Vistas registro */
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

/*Vistas login */

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

//Codificacion Dani
Route::get('/catalogo', [PageController::class, 'autos']);