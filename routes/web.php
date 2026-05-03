<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'login'])->name('login');
Route::post('/action/login',[AuthController::class, 'actionLogin'])->name('action.login');
// Routing admin
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/position', function () {
    return view('admin.position');
}); 
Route::get('/employee', function () {
    return view('admin.pegawai');
}); 
Route::get('/user',function(){
    return view('admin.pengguna');
});
Route::get('/payroll',function(){
    return view('admin.payroll');
});
// END ROUTING ADMIN