<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\InchargeController;

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
    return view('loginpage');
});
Route::post('/userchecklogin',[LoginController::class,'checklogin']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::resource('organizations',OrganizationController::class);
Route::get('/dash', [LoginController::class,'dashboard'])->name('dash');
Route::get('/organizationssearch', [OrganizationController::class,'search'])->name('organizationssearch');
Route::get('/searchindex', [SearchController::class,'index'])->name('searchindex');
Route::resource('incharges',InchargeController::class);
Route::get('/inchargessearch',[InchargeController::class,'search'])->name('inchargessearch');

