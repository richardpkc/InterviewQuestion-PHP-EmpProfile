<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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

//done
Route::get('employees/create', [EmployeeController::class, 'create'])->name('employees.create');
//done
Route::post('employees/store', [EmployeeController::class, 'store'])->name('employees.store');

Route::get('/employees/profiles', [EmployeeController::class, 'showProfiles'])->name('employees.profiles');

