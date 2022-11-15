<?php

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


Route::get('/sales-report', function () {
    $salesReport = new SalesReport();
    $pdfFormater = new PdfFormater();

    return $pdfFormater->formatToPdf($salesReport->export());
});

Route::get('/blog-post-json', function () {
    $post = new BlogPost();
    $post->setAuthor('ahmed maga');
    $post->setTitle('single responsibility');
    $post->setContent('using single responsibility with coheison and coupling');

    $jsonPrinter = new JsonBlogPostPrinter();
    return $jsonPrinter->print($post);
});

Route::get('/blog-post-html', function () {
    $post = new BlogPost();
    $post->setAuthor('ahmed maga');
    $post->setTitle('single responsibility');
    $post->setContent('using single responsibility with coheison and coupling');

    $htmlPrinter = new HtmlBlogPostPrinter();
    return $htmlPrinter->print($post);
});