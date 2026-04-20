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
// END ROUTING ADMIN