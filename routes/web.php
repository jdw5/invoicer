<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\InvoiceStoreController;
use App\Http\Controllers\DashboardShowController;
use App\Http\Controllers\InvoiceDestroyController;
use App\Http\Controllers\CreateInvoiceShowController;
use App\Http\Controllers\InvoiceShowController;
use App\Http\Controllers\InvoiceStatusUpdateController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', DashboardShowController::class)->name('dashboard.show');
    Route::get('/invoices/create', CreateInvoiceShowController::class)->name('invoices.create.show');
    Route::post('/invoices/create', InvoiceStoreController::class)->name('invoices.store');
    Route::post('/invoices/{invoice_id}/status', InvoiceStatusUpdateController::class)->name('invoices.status.update');
    Route::get('/invoices/{invoice_id}', InvoiceShowController::class)->name('invoices.show');
    Route::delete('/invoices/{invoice_id}', InvoiceDestroyController::class)->name('invoices.delete');
});
