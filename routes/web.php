<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\BasicListController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('lists', ListController::class)->except(['create', 'edit']);

    Route::post('lists/{list}/basic', [BasicListController::class, 'store'])->name('lists.basic.store');
    Route::put('lists/{list}/basic/{basic}', [BasicListController::class, 'update'])->name('lists.basic.update');
    Route::delete('lists/{list}/basic/{basic}', [BasicListController::class, 'destroy'])->name('lists.basic.destroy');

    Route::post('lists/{list}/todo', [TodoListController::class, 'store'])->name('lists.todo.store');
    Route::put('lists/{list}/todo/{todo}', [TodoListController::class, 'update'])->name('lists.todo.update');
    Route::delete('lists/{list}/todo/{todo}', [TodoListController::class, 'destroy'])->name('lists.todo.destroy');
});
