<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SubcategoryController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Website\IndexController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use function Pest\Laravel\get;

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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        // // Enter HomeController And Function Index
        // Route::get('/',[HomeController::class,'index']);

        //Dashboard
        Route::get('/dashboard', function () {
        return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');


        Route::middleware(['auth', 'verified'])->group(function () {
            //Setting
            Route::resource('/dashboard/setting',SettingController::class);
            //User
            Route::get('/dashboard/user',[UserController::class,'index'])->name('user.index');
            Route::post('/dashboard/user/store',[UserController::class,'store'])->name('user.store');
            Route::put('/dashboard/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
            Route::delete('/dashboard/user/delete/{id}',[UserController::class,'del'])->name('user.delete');
            //Category
            Route::resource('/dashboard/category',CategoryController::class);
            Route::put('dashboard/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
            //SubCategory
            Route::resource('/dashboard/subcategory',SubcategoryController::class);
            //Post
            Route::resource('/dashboard/post',PostController::class);
            Route::get('/dashboard/post/subcategory/{id}',[PostController::class,'getSubcategory']);
        });


        Route::middleware('auth')->group(function () {
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            });


        //Website
        Route::get('/',[IndexController::class,'index'])->name('website.index');


            require __DIR__.'/auth.php';

    });


