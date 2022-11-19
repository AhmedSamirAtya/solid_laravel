<?php

use App\Solid\DependencyInversionPrinciple\Good\FawryGateway;
use App\Solid\DependencyInversionPrinciple\Good\PayBalGateway;
use App\Solid\DependencyInversionPrinciple\Good\PaymentProcess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pay-with-fawry', function () {
    $paymentProcess = new PaymentProcess(new FawryGateway());

   return $paymentProcess->pay();
    
});

Route::get('/pay-with-paybal', function () {
    $paymentProcess = new PaymentProcess(new PayBalGateway());

   return $paymentProcess->pay();
    
});