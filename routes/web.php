<?php

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
// Route::post('/Registered',[App\Http\Controllers\MainController::class,'register'])->name('registered');
// Route::post('/logged',[App\Http\Controllers\MainController::class,'login'])->name('login-user');
// Route::get('/logout',[App\Http\Controllers\MainController::class,'logout']);
Route::get('/verifyEmail/{token}',[App\Http\Controllers\MainController::class,'emailverification']);
//controllers
Route::controller(App\Http\Controllers\MainController::class)->group(function(){
    Route::post('/Registered','register')->name('registered');
    Route::post('/logged','login')->name('login-user');
    Route::get('/logout','logout');

});
Route::controller(App\Http\Controllers\ApplicantController::class)->group(function(){
    Route::get('/applicant/account','profile')->middleware('isLoggedIn');
    Route::get('/applicant/dashboard','dashboard')->middleware('isLoggedIn');
    Route::put('/update-data/{id}','updateprofile')->middleware('isLoggedIn');
    Route::post('/update-password','updatepass')->middleware('isLoggedIn');
    Route::get('/admin/change-password','changepass')->middleware('isLoggedIn');
    
});
Route::controller(App\Http\Controllers\AdminController::class)->group(function(){

    //::get('/admin','');
    Route::get('/admin/dashboard','dashboardCharts')->middleware('isLoggedIn');
    Route::get('admin/piechart','piechart')->middleware('isLoggedIn');
    Route::get('admin/linechart','linechart')->middleware('isLoggedIn');
    Route::get('/admin/application','listOfApplicant')->middleware('isLoggedIn');
    Route::post('/exportfile','exportfile')->name('export')->middleware('isLoggedIn');
    Route::post('/importfile','importfile')->name('import.file')->middleware('isLoggedIn');
    Route::get('/admin/announcement','displayAnnouncements')->middleware('isLoggedIn');
    Route::post('/announcement','announcement')->name('upload-announce')->middleware('isLoggedIn');
    Route::get('/admin/deleteAnnouncement/{id}','deleteAnnouncement')->middleware('isLoggedIn');
    Route::get('/admin/register','createadmin')->name('createAdmin')->middleware('isLoggedIn');
    Route::get('/admin/editannouncement/{id}','showEdit')->middleware('isLoggedIn');
    Route::get('/admin/deleteimage/{id}/{image}','deleteImage')->middleware('isLoggedIn');
    Route::post('/admin/updateannouncement/{id}','updateAnnouncement')->middleware('isLoggedIn');
    Route::get('/admin/deleteApplicant/{id}','deleteApplicant')->middleware('isLoggedIn');
    // Route::get('/admin/admin-reg','');
   // Route::get('/admin/announcement','');
    Route::get('/admin', function () {
        return view('admin.index');
    })->middleware('isLoggedIn');
 
    Route::get('/admin/admin-reg', function () {
        return view('admin.body.register');
    })->middleware('isLoggedIn');
   
});
//middlewares
Route::group(["middleware"=>['LoggedIn']],function(){

    Route::get('/',function(){
        return view('layouts.main');
    });
    Route::get('/login',function(){
        return view('layouts.login');
    });
    Route::get('/register',function(){
        return view('layouts.register');
    });
   
});

Route::group(["middleware"=>['isLoggedIn']],function(){

    Route::get('/applicant', function () {
        return view('user.index');
    });
//    Route::get('/applicant/dashboard',function(){
//         return view('user.body.dashboard');
//     });
    // Route::get('/applicant/account',function(){
    //     return view('user.body.account');
    // });
});














