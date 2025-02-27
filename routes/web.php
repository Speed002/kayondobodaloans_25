<?php

use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileStoreController;
use Symfony\Contracts\Service\ResetInterface;
use App\Http\Controllers\ClientShowController;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\ClientStoreController;
use Illuminate\Auth\Middleware\RequirePassword;
use App\Http\Controllers\ClientCreateController;
use App\Http\Controllers\MessageIndexController;
use App\Http\Controllers\Auth\LoginIndexController;
use App\Http\Controllers\Auth\ResetIndexController;
use App\Http\Controllers\ClientCloneIndexController;
use App\Http\Controllers\ClientCloneStoreController;
use App\Http\Controllers\Auth\RecoverIndexController;
use App\Http\Controllers\Auth\RegisterIndexController;
use App\Http\Controllers\Auth\TwoFactorIndexController;
use App\Http\Controllers\Account\AccountIndexController;
use App\Http\Controllers\UpdateClientLoanInfoController;
use App\Http\Controllers\Account\SecurityIndexController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\PDFDownloadController;
use App\Http\Controllers\UpdateClientMotorInfoController;
use App\Http\Controllers\UpdateClientRefereeInfoController;
use App\Http\Controllers\UpdateClientPersonalInfoController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('verified');
// ->middleware(RequirePassword::using(null, 1));

if (Features::enabled(Features::registration())) {
    Route::get('/auth/register', RegisterIndexController::class)->name('auth.register');
}

Route::get('/auth/login', LoginIndexController::class)->name('auth.login');

if (Features::enabled(Features::updateProfileInformation())) {
    Route::get('/account', AccountIndexController::class)->name('account.index');
}

if (Features::hasSecurityFeatures()) {
    Route::get('/account/security', SecurityIndexController::class)->name('account.security.index');
}

if (Features::enabled(Features::twoFactorAuthentication())) {
    Route::get('/auth/two-factor', TwoFactorIndexController::class)->name('auth.two-factor');
}

if (Features::enabled(Features::resetPasswords())) {
    Route::get('/auth/recover', RecoverIndexController::class)->name('auth.recover');
    Route::get('/auth/reset', ResetIndexController::class)->name('password.reset');
}

Route::get('/clients', ClientIndexController::class)->name('clients')->middleware('verified');
Route::get('/client/{client}/show/{key?}', ClientShowController::class)->name('client.show')->middleware('verified');
Route::get('/client/create', ClientCreateController::class)->name('create.client')->middleware('verified');
Route::post('/client/store', ClientStoreController::class)->name('store.client');
Route::get('/messages', MessageIndexController::class)->name('messages')->middleware('verified');
// clone client
Route::get('/client/{client}/clone', ClientCloneIndexController::class)->name('client.clone');
Route::post('/client/clone/store', ClientCloneStoreController::class)->name('client.clone.store');
// Route::multisteps();
Route::patch('/client/update/personal/info/{client}/{field}', UpdateClientPersonalInfoController::class)->name('update.client.personal-info');
Route::patch('/client/update/motor/info/{motor}/{field}', UpdateClientMotorInfoController::class)->name('update.client.motor-info');
Route::patch('/client/update/referee/info/{referee}/{field}', UpdateClientRefereeInfoController::class)->name('update.client.referee-info');
Route::patch('/client/update/loan/info/{referee}/{field}', UpdateClientLoanInfoController::class)->name('update.client.loan-info');

Route::post('/files/store/{client}', FileStoreController::class)->name('files.store');
Route::get('/files/download/{file}', FileDownloadController::class)->name('files.download');

// Luganda
// English
Route::get('/generate-english-agreement/{motor}', [PDFDownloadController::class, 'generateEnglishPDF'])->name('english.document');
Route::get('/generate-luganda-agreement/{motor}', [PDFDownloadController::class, 'generateLugandaPDF'])->name('luganda.document');
Route::get('/generate-take-over-form/{motor}', [PDFDownloadController::class, 'generateTakeOverForm'])->name('take-over.document');
Route::get('/generate-online-hirer-form/{motor}', [PDFDownloadController::class, 'generateOnlineHirerForm'])->name('online-hirer-form.document');

require __DIR__ . '/fortify.php';
