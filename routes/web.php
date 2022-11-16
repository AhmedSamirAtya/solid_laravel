<?php

use App\Solid\OpenClosedPrinciple\Cat;
use App\Solid\OpenClosedPrinciple\Communication;
use App\Solid\OpenClosedPrinciple\Fox;
use App\Solid\SingleResponsibility\EX1\PdfFormater;
use App\Solid\SingleResponsibility\EX1\SalesReport;
use App\Solid\SingleResponsibility\EX2\BlogPost;
use App\Solid\SingleResponsibility\EX2\HtmlBlogPostPrinter;
use App\Solid\SingleResponsibility\EX2\JsonBlogPostPrinter;
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
    return view('welcome');
});

Route::get('/cat-talk', function () {
    $cat = new Cat();
    $communication = new Communication();
    return $communication->communicate($cat);
});
Route::get('/fox-talk', function () {
    $fox = new Fox();
    $communication = new Communication();
    return $communication->communicate($fox);
});