<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// api/
Route::get('/',function(){
    return 'Welcome Everyone in My Project => Blog System';
});


// JWT Authentication
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});



//Setting
Route::middleware('jwt.verify')->group(function () {

    Route::get('/setting',[SettingController::class,'index'])->name('api.setting');
    Route::get('/setting/all',[SettingController::class,'all_setting'])->name('api.all.setting');
    Route::get('/setting/{id}',[SettingController::class,'show'])->name('api.one_setting');
    Route::post('/setting/store',[SettingController::class,'store'])->name('api.store.setting');
    
});

//Category



//Post
Route::get('/post',[PostController::class,'index'])->name('api.post');
