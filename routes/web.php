<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('Frontend.pages.about');
})->name('about');




Route::get('/product', function () {
    return view('Frontend.pages.product');
})->name('product');

Route::get('/silk-Fabric', function () {
    return view('Frontend.pages.silk-fabric');
})->name('silkFabric');

Route::get('/linen-Fabric', function () {
    return view('Frontend.pages.linen-Fabric');
})->name('linenFabric');


Route::get('/cotton-Fabric', function () {
    return view('Frontend.pages.cottonFabric');
})->name('cottonFabric');


Route::get('/leather-Material', function () {
    return view('Frontend.pages.leather-material');
})->name('leatherMaterial');

Route::get('/geographic-Fabric', function () {
    return view('Frontend.pages.geographic-fabric');
})->name('geographicFabric');



//service Category route start
Route::get('/service', function () {
    return view('Frontend.pages.service');
})->name('service');



Route::get('/fabric-printing', function () {
    return view('Frontend.pages.fabric-printing');

})->name('fabricPrinting');

Route::get('/fabric-dyeing', function () {
    return view('Frontend.pages.fabric-dyeing');
})->name('fabricDyeing');

Route::get('/engineering', function () {
    return view('Frontend.pages.engineering');
})->name('engineering');

Route::get('/manufacture', function () {
    return view('Frontend.pages.manufacture');
})->name('manufacture');

Route::get('/design-fabric', function () {
    return view('Frontend.pages.design-fabric');
})->name('designFabric');

//service Category route end





Route::get('/contact', function () {
    return view('Frontend.pages.contact');
})->name('contact');
