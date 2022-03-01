<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $services = DB::table('home_services')->get();
    return view('home',compact('brands','abouts','services'));
});

//Category
Route::get('/category/all',[CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class, 'Edit']);
Route::post('/category/update/{id}',[CategoryController::class, 'Update']);
Route::get('softdelete/category/{id}',[CategoryController::class, 'SoftDelete']);
Route::get('category/restore/{id}',[CategoryController::class, 'Restore']);
Route::get('pdelete/category/{id}',[CategoryController::class, 'Pdelete']);


// BRAND ROUTES

Route::get('/brand/all',[BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class, 'Edit']);
Route::post('/brand/update/{id}',[BrandController::class, 'Update']);
Route::get('/brand/delete/{id}',[BrandController::class, 'Delete']);

// Multi Images
Route::get('/multi/image',[BrandController::class, 'Multipic'])->name('multi.image');
Route::post('/multi/add',[BrandController::class, 'StoreImg'])->name('store.image');


// Admin All Route
Route::get('/home/slider',[HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}',[HomeController::class, 'SliderEdit']);
Route::post('/slider/update/{id}',[HomeController::class, 'SliderUpdate']);
Route::get('/slider/delete/{id}',[HomeController::class, 'SliderDelete']);

// Home About
Route::get('/home/about',[AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/about',[AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/about',[AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}',[AboutController::class, 'EditAbout']);
Route::post('/update/homeabout/{id}',[AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}',[AboutController::class, 'DeleteAbout']);

//Home Service
Route::get('/home/service',[ServiceController::class, 'HomeService'])->name('home.service');
Route::get('/add/service',[ServiceController::class, 'AddService'])->name('add.service');
Route::post('/store/service',[ServiceController::class, 'StoreService'])->name('store.service');
Route::get('/service/edit/{id}',[ServiceController::class, 'EditService'])->name('edit.service');
Route::post('/update/service/{id}',[ServiceController::class, 'UpdateService'])->name('update.service');
Route::get('/service/delete/{id}',[ServiceController::class, 'DeleteService'])->name('delete.service');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::all();
    return view('admin.index',);
})->name('dashboard');

Route::get('/user/logout',[BrandController::class, 'Logout'])->name('user.logout');
