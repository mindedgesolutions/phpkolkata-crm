<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DealController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\LeadFollowUpController;
use App\Http\Controllers\Admin\PendingApprovalDealController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'disableBack', 'menuAccess'])->group(function () {

	// Route::get('/dashboard', function () {
	// 	return view('dashboard');
	// })->name('dashboard');

	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

	Route::controller(UserController::class)->prefix('/user')->group(function(){
		Route::get('/list', 'index')->name('user.index');
		Route::get('/add', 'create')->name('user.create');
		Route::post('/store', 'store')->name('user.store');
		Route::get('/{id}/edit', 'edit')->name('user.edit');
		Route::post('/{id}/update', 'update')->name('user.update');
		Route::post('/{id}/destroy', 'destroy')->name('user.destroy');
		// Route::post('/removeAccess', 'removeAccess')->name('user.removeAccess');
	});

	Route::controller(AdminController::class)->prefix('/admin')->group(function(){
		Route::get('/list', 'index')->name('admin.index');
		Route::get('/add', 'create')->name('admin.create');
		Route::post('/store', 'store')->name('admin.store');
		Route::get('/{id}/edit', 'edit')->name('admin.edit');
		Route::post('/{id}/update', 'update')->name('admin.update');
		Route::post('/{id}/destroy', 'destroy')->name('user.destroy');
	});

	Route::controller(LeadController::class)->prefix('/lead')->group(function(){
		Route::get('/list', 'index')->name('lead.index');
		Route::get('/add', 'create')->name('lead.create');
		Route::post('/store', 'store')->name('lead.store');
		Route::post('/update-assignTo', 'leadAssignTo')->name('lead.assignTo');
		Route::get('/{id}/edit', 'edit')->name('lead.edit');
		Route::post('/{id}/update', 'update')->name('lead.update');
		Route::get('/{id}/view', 'show')->name('lead.show');
		Route::post('/destroy', 'destroy')->name('lead.destroy');
	});

	Route::controller(LeadFollowUpController::class)->prefix('followup')->group(function(){
		Route::post('/store', 'store')->name('followup.store');
	});

	Route::controller(PendingApprovalDealController::class)->prefix('/deal/pending')->group(function(){
		Route::get('/list', 'index')->name('deal.pending.index');
		Route::get('/{id}/view', 'show')->name('deal.pending.show');
		Route::post('/{id}/update', 'update')->name('deal.pending.update');
	});

	Route::controller(DealController::class)->prefix('/deal/active')->group(function(){
		Route::get('/list', 'index')->name('deal.active.index');
		Route::get('/add', 'create')->name('deal.active.create');
	});

});

Route::post('/lead/export', [LeadController::class, 'export'])->name('lead.export');

Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');