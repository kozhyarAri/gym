<?php

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

Route::get('/',App\Livewire\Login::class)->name('login');
Route::middleware(['auth'])->group(function(){
    Route::get('admin/dashboard',App\Livewire\Dashboard::class)->name('admin.dashboard');
    Route::get('admin/users',App\Livewire\Admin\ShowUsers::class)->name('admin.users');
    Route::get('admin/addUser',App\Livewire\Admin\AddUsers::class)->name('admin.users.add');
    Route::get('admin/editUser/{id}',App\Livewire\Admin\EditUsers::class)->name('admin.users.edit');

});