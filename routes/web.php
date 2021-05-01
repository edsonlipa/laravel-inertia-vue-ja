<?php

use App\Http\Controllers\NoteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
// Route::view('/', 'index');
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware('auth:sanctum')->group(function () {

    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::resource('notes',NoteController::class);

});
// Route::get('dashboard',[PageController::class,'dashboard'])
//         ->middleware('auth:sanctum')
//         ->name('dashboard');

// Route::resource('notes', NotaController::class)->middleware('auth:sanctum');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
