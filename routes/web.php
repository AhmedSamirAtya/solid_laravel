<?php

use app\Solid\DependencyInversionPrinciple\Good\FawryGateway;
use app\Solid\DependencyInversionPrinciple\Good\PayBalGateway;
use app\Solid\DependencyInversionPrinciple\Good\PaymentProcess;
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