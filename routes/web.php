<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\ChefController;
use App\Http\Controllers\Backend\contactController;
use App\Http\Controllers\Backend\galleryController;
use App\Http\Controllers\Backend\homeSlider;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\menuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\templateController;
use App\Http\Controllers\frontendController;
use App\Mail\reservation;

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



Route::get('/dashboard', [App\Http\Controllers\templateController::class, 'index'])->name('backend_dashboard');

Route::get('/',[frontendController::class,'index'])->name('index');
Route::get('/contact',[frontendController::class,'contact'])->name('contact');
Route::get('/gallery',[frontendController::class,'gallery'])->name('gallery');
Route::get('/menu',[frontendController::class,'menu'])->name('menu');

 //category route start
 Route::group(['prefix' => 'logo'], function(){
    Route::get('/',[LogoController::class, 'index'])->name('logoShow');
    Route::post('/store',[LogoController::class,'store'])->name('logoStore');
    Route::post('/update/{logo:id}',[LogoController::class,'update'])->name('logoUpdate');
    Route::post('/delete/{logo:id}',[LogoController::class,'destroy'])->name('logoDelete');
});

Route::group(['prefix' => 'slider'], function(){
    Route::get('/',[homeSlider::class, 'index'])->name('sliderShow');
    Route::post('/store',[homeSlider::class,'store'])->name('sliderStore');
    Route::post('/update/{slider:id}',[homeSlider::class,'update'])->name('sliderUpdate');
    Route::post('/delete/{slider:id}',[homeSlider::class,'destroy'])->name('sliderDelete');
});

Route::group(['prefix' => 'about'], function(){
    Route::get('/',[AboutController::class, 'index'])->name('aboutShow');
    Route::post('/store',[AboutController::class,'store'])->name('aboutStore');
    Route::post('/update/{about:id}',[AboutController::class,'update'])->name('aboutUpdate');
    Route::post('/delete/{about:id}',[AboutController::class,'destroy'])->name('aboutDelete');
});

Route::group(['prefix' => 'chef'], function(){
    Route::get('/',[ChefController::class, 'index'])->name('chefShow');
    Route::post('/store',[ChefController::class,'store'])->name('chefStore');
    Route::post('/update/{chef:id}',[ChefController::class,'update'])->name('chefUpdate');
    Route::post('/delete/{chef:id}',[ChefController::class,'destroy'])->name('chefDelete');
});

Route::group(['prefix' => 'admingallery'], function(){
    Route::get('/',[galleryController::class, 'index'])->name('galleryShow');
    Route::post('/store',[galleryController::class,'store'])->name('galleryStore');
    Route::post('/update/{gallery:id}',[galleryController::class,'update'])->name('galleryUpdate');
    Route::post('/delete/{gallery:id}',[galleryController::class,'destroy'])->name('galleryDelete');
});

Route::group(['prefix' => 'category'], function(){
    Route::get('/',[categoryController::class, 'index'])->name('categoryShow');
    Route::post('/store',[categoryController::class,'store'])->name('categoryStore');
    Route::post('/update/{category:id}',[categoryController::class,'update'])->name('categoryUpdate');
    Route::post('/delete/{category:id}',[categoryController::class,'destroy'])->name('categoryDelete');
});

Route::group(['prefix' => 'adminmenu'], function(){
    Route::get('/',[menuController::class, 'index'])->name('menuShow');
    Route::post('/store',[menuController::class,'store'])->name('menuStore');
    Route::post('/update/{menu:id}',[menuController::class,'update'])->name('menuUpdate');
    Route::post('/delete/{menu:id}',[menuController::class,'destroy'])->name('menuDelete');
});


Route::group(['prefix' => 'adminContact'], function(){
    Route::get('/',[contactController::class, 'index'])->name('contactShow');
    Route::post('/store',[contactController::class,'store'])->name('contactStore');
    Route::post('/update/{contact:id}',[contactController::class,'update'])->name('contactUpdate');
    Route::post('/delete/{contact:id}',[contactController::class,'destroy'])->name('contactDelete');
});

