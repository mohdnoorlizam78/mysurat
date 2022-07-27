<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratTerbukaTerhadController;
use App\Http\Controllers\SuratSulitController;

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
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::group(['middleware' => ['auth','prevent-back-history']], function() {
    
    Route::get('/dashboard', [DashboardController::class, 'index']);
    //modul permission      
    Route::get('permissions', [PermissionController::class, 'index']);
    Route::get('permissions/add',[PermissionController::class, 'add']);
    Route::post('permissions/add',[PermissionController::class, 'store']);
    Route::get('permissions/show/{id}',[PermissionController::class, 'show']);
    Route::get('permissions/edit/{id}',[PermissionController::class, 'edit']);
    Route::put('permissions/update/{id}',[PermissionController::class, 'update']);
    Route::get('permissions/delete/{id}',[PermissionController::class, 'delete']);


    Route::resource('roles', RoleController::class);
    Route::post('roles/create', [RoleController::class, 'create']);
    Route::post('roles/store', [RoleController::class, 'store']);
    Route::get('roles/destroy/{id}', [RoleController::class, 'destroy']);
    Route::get('roles/show/{id}', [RoleController::class, 'show']);
    Route::get('roles/edit/{id}', [RoleController::class, 'edit']);
    Route::post('roles/update/{id}', [RoleController::class, 'update']);
     
    Route::resource('users', UserController::class);
    //modul users      
    
    //Route::get('users', [UserController::class,'index']);
    Route::post('users/create', [UserController::class, 'create']);
    Route::post('users/store', [UserController::class, 'store']);
    Route::get('users/destroy/{id}', [UserController::class, 'destroy']);
    Route::get('users/show/{id}', [UserController::class, 'show']);
    Route::get('users/edit/{id}', [UserController::class, 'edit']);
    Route::post('users/update/{id}', [UserController::class, 'update']);
    Route::get('users/editprofile/{id}',[UserController::class, 'editprofile']);
    Route::post('users/updatePassword/{id}', [UserController::class, 'updatePassword']);

    Route::resource('suratterhad', SuratTerbukaTerhadController::class);
    Route::get('suratterhad.paparan', [SuratTerbukaTerhadController::class,'paparan']);
    Route::get('suratterhad/create',[SuratTerbukaTerhadController::class, 'create']);
    Route::post('suratterhad/store',[SuratTerbukaTerhadController::class, 'store']);
    Route::get('suratterhad/edit/{id}',[SuratTerbukaTerhadController::class, 'edit']);
    Route::post('suratterhad/update/{id}',[SuratTerbukaTerhadController::class, 'update']);
    Route::get('suratterhad/delete/{id}',[SuratTerbukaTerhadController::class, 'delete']);

    Route::resource('suratsulit', SuratSulitController::class);
    Route::get('suratsulit.paparan', [SuratSulitController::class,'paparan']);
    Route::get('suratsulit/create',[SuratSulitController::class, 'create']);
    Route::post('suratsulit/store',[SuratSulitController::class, 'store']);
    Route::get('suratsulit/edit/{id}',[SuratSulitController::class, 'edit']);
    Route::post('suratsulit/update/{id}',[SuratSulitController::class, 'update']);
    Route::get('suratsulit/delete/{id}',[SuratSulitController::class, 'delete']);
   
    Route::get('keluar',function(){
        \Auth::logout();
        return view('auth.login');
    });
});



 