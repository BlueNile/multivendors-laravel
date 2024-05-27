<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SectionController;

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



require __DIR__.'/auth.php';
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::prefix('/admin')->group(function(){
            //public routes اى حد بيزورهم
            Route::get('login',[AdminController::class,'login']);
            Route::post('login',[AdminController::class,'login']);
            Route::get('register',[AdminController::class,'register']);
            Route::middleware('admin')->group(function(){
            //private routes اللى بيزورهم معه حق الدخول و الصلاحيات
            Route::get('dashboard',[AdminController::class,'dashboard']);
            //update admin password
            Route::get('update-admin-password',[AdminController::class,'updateAdminPassword']);
            Route::post('update-admin-password',[AdminController::class,'updateAdminPassword']);
            Route::match(['get','post'],'update-admin-data',[AdminController::class,'updateAdminDetails']);
            Route::get('logout',[AdminController::class,'logout']);
            //Route::match(['get','post'],[AdminController::class,'updateAdminPassword']);
            Route::get('charts',[AdminController::class,'chart']);
            //sections
            Route::get('sections',[SectionController::class,'sections']);
            Route::match(['get','post'],'sections/addEdit/{id?}',[SectionController::class,'addEditSection']);
            //view subadmin
            Route::get('subadmins',[AdminController::class,'subadmins']);
           // Route::get('add-new-admin',[AdminController::class,'addNewAdmin'])->name('admin.add-new-admin');
           // Route::post('add-new-admin',[AdminController::class,'addNewAdmin'])->name('admin.add-new-admin');
            //Route::match(['get','post'],'add-new-admin',[AdminController::class,'addNewAdmin']);
            Route::post('sections/update-section',[SectionController::class,'updateSectionStatus']);
            });
            });
        
        Route::get('/', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    });



