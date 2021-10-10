<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sento_userController;
use App\Http\Controllers\SentoController;
use App\Http\Controllers\Sekatsu_userController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('top');
// })->name('top');

// Route::get('/dashboard', [Sento_userController::class, 'testindex'])
// ->middleware(['auth'])
// ->name('testindex');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/sento_users', function () {
//     return view('sento_users');
// })->name('sento_users');

// Route::get('/sento_users/edit', function () {
//     return view('sento_users_edit');
// })->name('sento_users_edit');

// Route::get('/new', function () {
//     return view('new');
// })->middleware(['auth'])->name('new');

// Route::get('/sentos/new_img', function () {
//     return view('new_img');
// })->middleware(['auth'])->name('new_img');

Route::get('/sentos/done', function () {
    return view('done');
})->middleware(['auth'])->name('done');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registry', function () {
    return view('registry');
})->name('registry');

// Route::get('/sekatsu', function () {
//     return view('sekatsu');
// })->name('sekatsu');

// Route::get('/search', function () {
//     return view('search');
// })->name('search');

Route::get('/search', [SentoController::class, 'index'])
    ->name('sento.index');

Route::get('/sento/create', [SentoController::class, 'create'])
    ->name('sento.create');

Route::get('/sento/{sentos}', [SentoController::class, 'show'])
    ->name('sento.show')
    ->where('sento','[0-9]+');

Route::post('/sento/store', [SentoController::class, 'store'])
    ->middleware(['auth'])->name('sento.store');

Route::get('/sentos', function () {
    return view('sentos');
})->name('sentos');

Route::get('/ticket', function () {
    return view('ticket');
})->name('ticket');

Route::get('/ticket/detail', function () {
    return view('ticket_detail');
})->name('ticket_detail');

Route::get('/sento_users', [Sento_userController::class, 'index'])
    ->name('sento_users');

// Route::get('/sento_users/edit/{sento_user}', [Sento_userController::class, 'show'])
//     ->name('sento_users_edit');

Route::get('/sento_users/create', [Sento_userController::class, 'create'])
    ->name('sento_users_create');

// Route::get('/sento_users/edit/{sento_user}', [PostController::class, 'edit'])
//     ->name('sento_users_edit');

Route::post('/sento_users/store', [Sento_userController::class, 'store'])
    ->name('sento_users_store');



Route::get('/sekastu_users', [Sekatsu_userController::class, 'index'])
    ->name('sekatsu_user_index');

// Route::get('/sento_users/edit/{sento_user}', [Sento_userController::class, 'show'])
//     ->name('sento_users_edit');

Route::get('/sekatsu_users/create', [Sekatsu_userController::class, 'create'])
    ->name('sekatsu_users_create');

Route::post('/sekatsu_users/store', [Sekatsu_userController::class, 'store'])
    ->name('sekastu_users_store');

// Route::post('/sento_users/store', [Sento_userController::class, 'store'])
//     ->name('sento_users_store');

Route::get('/', [TopController::class, 'index'])
    ->name('top');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// Route::get('/dashboard', [DashboardController::class, 'show'])
//     ->name('dashboard.show');





