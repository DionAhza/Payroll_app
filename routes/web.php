<?php

use Illuminate\Support\Facades\Route;


// Routing admin
Route::get('/', function () {
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