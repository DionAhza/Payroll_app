<?php

use Illuminate\Support\Facades\Route;


// Routing admin
Route::get('/', function () {
    return view('admin.index');
});
Route::get('/position', function () {
    return view('livewire.admin.position');
});
// END ROUTING ADMIN