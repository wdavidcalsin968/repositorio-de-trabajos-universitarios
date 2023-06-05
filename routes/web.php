<?php

use App\Http\Controllers\MatriculaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::resource('matricula', MatriculaController::class);
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/datatable', function () {
    return Inertia::render('Datatable');
});

Route::get('/calendars', function () {
    return Inertia::render('Calendars');
});

Route::get('/formulario', function () {
    return Inertia::render('Formulario');
});

Route::get('/users', function () {
    return Inertia::render('Users');
})->name('users');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // dd(Auth::user()->name);
        // return Inertia::render('Dashboard');
        return Inertia::render('Dashboard', ['user' => Auth::user()]);
    })->name('dashboard');
});
