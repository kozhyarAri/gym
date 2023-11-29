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
    //Admin Users
    Route::get('admin/users',App\Livewire\Admin\ShowUsers::class)->name('admin.users');
    Route::get('admin/addUser',App\Livewire\Admin\AddUsers::class)->name('admin.users.add');
    Route::get('admin/editUser/{id}',App\Livewire\Admin\EditUsers::class)->name('admin.users.edit');
    //Plans
    Route::get('admin/plan',App\Livewire\Admin\Plans\ShowPlans::class)->name('admin.plans');
    Route::get('admin/addPlan',App\Livewire\Admin\Plans\AddPlans::class)->name('admin.plans.add');
    Route::get('admin/editPlan/{id}',App\Livewire\Admin\Plans\EditPlans::class)->name('admin.plans.edit');
    //Members
    Route::get('admin/members',App\Livewire\Admin\Members\ShowMembers::class)->name('admin.members');
    Route::get('admin/addMembers',App\Livewire\Admin\Members\AddMembers::class)->name('admin.members.add');
    Route::get('admin/editMembers/{id}',App\Livewire\Admin\Members\EditMembers::class)->name('admin.members.edit');
        //Payments
        Route::get('admin/payments',App\Livewire\Admin\Payments\ShowPayments::class)->name('admin.payments');
        Route::get('admin/addPayments',App\Livewire\Admin\Payments\AddPayments::class)->name('admin.payments.add');
        // Route::get('admin/editMembers/{id}',App\Livewire\Admin\Members\EditMembers::class)->name('admin.members.edit');
});