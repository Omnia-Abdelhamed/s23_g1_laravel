<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
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
    return "welcome";
});

Route::prefix('admin')->group(function(){
    Route::get('/employees', [EmployeeController::class,'index']);
    Route::get('/employees/create', [EmployeeController::class,'create']);
    Route::get("/employees/{id}",[EmployeeController::class,'show']);

    Route::get("/departments",[DepartmentController::class,'index'])->name('dept');
});

// Route::group(['prefix'=>'admin'],function(){

// });



