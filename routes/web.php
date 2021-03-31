<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NowplayingController;
use App\Http\Controllers\Pages\AccountHistoryController;
use App\Http\Controllers\Pages\BetHistroyController;
use App\Http\Controllers\Pages\ChangepasswordController;
use App\Http\Controllers\Pages\DepositController;
use App\Http\Controllers\Pages\LoginhistoryController;
use App\Http\Controllers\Pages\OtherSettingsController;
use App\Http\Controllers\Pages\PaymentSourceController;
use App\Http\Controllers\Pages\PersonalDetailsController;
use App\Http\Controllers\TopteamsController;
use App\Http\Controllers\TournamentsController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');

Auth::routes();
//Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

/*Pages*/
Route::get('/accounthistory', [AccountHistoryController::class, 'index']);
Route::get('/bethistory', [BetHistroyController::class, 'index']);
Route::get('/changepassword', [ChangepasswordController::class, 'index']);
Route::get('/deposit', [DepositController::class, 'index']);
Route::get('/loginhistory', [LoginhistoryController::class, 'index']);
Route::get('/othersettings', [OtherSettingsController::class, 'index']);
Route::get('/paymentsource', [PaymentSourceController::class, 'index']);
Route::get('/personaldetails', [PersonalDetailsController::class, 'index']);

Route::get('/nowplaying', [NowplayingController::class, 'index'])->name('nowplaying');
Route::get('/tournaments', [TournamentsController::class, 'index'])->name('tournaments');
Route::get('/topteams', [TopteamsController::class, 'index'])->name('topteams');
