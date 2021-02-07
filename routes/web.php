<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//ADMİN PANEL
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
//Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');
Route::get('/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('logout');


//CATEGORY
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::post('category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');



//ARABA VERİLERİNİ EKLEDİĞİM YER
Route::prefix('car')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\CarController::class,'index'])->name('admin_cars');
    Route::get('create',[App\Http\Controllers\Admin\CarController::class,'create'])->name('admin_car_add');
    Route::post('store',[App\Http\Controllers\Admin\CarController::class,'store'])->name('admin_car_store');
    Route::get('edit/{id}',[App\Http\Controllers\Admin\CarController::class,'edit'])->name('admin_car_edit');
    Route::post('update/{id}',[App\Http\Controllers\Admin\CarController::class,'update'])->name('admin_car_update');
    Route::get('delete/{id}',[App\Http\Controllers\Admin\CarController::class,'destroy'])->name('admin_car_delete');
    Route::get('show',[App\Http\Controllers\Admin\CarController::class,'show'])->name('admin_car_show');
});


//İMAGE EKLEDİĞİM YER
Route::prefix('image')->group(function (){
    Route::get('create',[App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
    Route::post('store',[App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
    Route::get('delete/{id}',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
    Route::get('show',[App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
});

    Route::get('setting',[App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

});

Route::get('/home2', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*
//Bu işlem ile route gitmeden sayfaya ulaşıyorum.
Route::get('/', function () {
    return view('home.index');
});

*/

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');

});



// ANA MENÜLERİMİZ
Route::get('/', [HomeController::class, 'index']);
Route::get('/anasayfa', [HomeController::class, 'index'])->name('anasayfa');
Route::get('/hakkimizda',[HomeController::class,'hakkimizda'])->name('hakkimizda');
Route::get('/vizyonumuz',[HomeController::class,'vizyonumuz'])->name('vizyonumuz');
Route::get('/misyonumuz',[HomeController::class,'misyonumuz'])->name('misyonumuz');
Route::get('/filo_kiralama',[HomeController::class,'filo_kiralama'])->name('filo_kiralama');
Route::get('/kiralama_sozlesmesi',[HomeController::class,'kiralama_sozlesmesi'])->name('kiralama_sozlesmesi');
Route::get('/kiralama_kosullari',[HomeController::class,'kiralama_kosullari'])->name('kiralama_kosullari');
Route::get('/iletisim',[HomeController::class,'iletisim'])->name('iletisim');




