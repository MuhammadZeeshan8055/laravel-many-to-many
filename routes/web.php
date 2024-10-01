<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});


route::get('/employee',[EmployeeController::class,'index']);
route::get('/roles',[RoleController::class,'index']);
route::get('/create',[EmployeeController::class,'create']);