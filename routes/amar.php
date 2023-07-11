<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('amar', function(){
	return "amar";
});
Route::get('amar/number', function(){
	return view('amr');
});

