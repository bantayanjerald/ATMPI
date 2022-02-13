<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DCC\CompanyGoalController;

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

Route::get('/home', function () {
    return view('home',['title' => "Welcome"]);
});

// route for dcc
Route::get('/dcc/company_goals',[CompanyGoalController::class,'index'])->name('dcc.companyGoals.index');

