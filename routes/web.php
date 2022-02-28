<?php

use App\Http\Controllers\DCC\CompanyGoalController;
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

Route::get('/home', function () {
    return view('home',['title' => "Welcome"]);
});

// route for dcc

Route::get('/dcc/index',[CompanyGoalController::class,'index'])->name('dcc.companyGoals.index');
Route::get('/dcc/dept',[CompanyGoalController::class,'dept'])->name('dcc.dept');
Route::get('/dcc/company_goals/{year}',[CompanyGoalController::class,'company_goals'])->name('dcc.company_goals');

Route::get('/dcc/department/{year}/{dept_id}',[CompanyGoalController::class,'department_goals'])->name('dcc.department_goals');
Route::post('/dcc/company_goals/store/{dept_id}/{department}',[CompanyGoalController::class,'store'])->name('dcc.store');
Route::get('/dcc/company_goals/edit/{id}',[CompanyGoalController::class,'edit'])->name('dcc.edit');
Route::put('/dcc/company_goals/update/{id}',[CompanyGoalController::class,'update'])->name('dcc.update');
Route::get('/dcc/department_goals/data/{id}',[CompanyGoalController::class,'data'])->name('dcc.data');

