<?php

use App\Solid\OpenClosedPrinciple\Cat;
use App\Solid\OpenClosedPrinciple\Communication;
use App\Solid\OpenClosedPrinciple\Fox;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
