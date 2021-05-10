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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctors',[App\Http\Controllers\Doctor::class,'index'])->name('doctor');
Route::get('/consult/{slug}',[App\Http\Controllers\Consult::class,'index'])->name('consult');
Route::get('/appointment',[App\Http\Controllers\SuccessPage::class,'index'])->name('successpage');

Route::namespace("Admin")->prefix('admin')->group(function(){
        
    Route::namespace('Auth')->group(function(){
    Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/add-doctor', [App\Http\Controllers\Admin\AddDoctorController::class, 'index'])->name('AddDoctor');
    Route::post('/login',[App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
    Route::get('/update/doctor',[App\Http\Controllers\Admin\UpdateDoctorController::class, 'index'])
    ->name('admin.updatedoctor');
    Route::get('/update/doctorinfo',[App\Http\Controllers\Admin\UpdateDr::class,'index'])->name('admin.update');
    Route::post('logout',[App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
    });
   });

   //for doctors
   Route::namespace("doctor")->prefix('doctor')->group(function(){
    Route::get('/', [App\Http\Controllers\Doctor\HomeController::class, 'index'])->name('doctor.home');
    //Route::get('/add-doctor', [App\Http\Controllers\Admin\AddDoctorController::class, 'index'])->name('AddDoctor');
    
    Route::namespace('Auth')->group(function(){
        Route::get('/login', [App\Http\Controllers\Doctor\Auth\LoginController::class, 'showLoginForm'])->name('doctor.login');
        Route::post('/login',[App\Http\Controllers\Doctor\Auth\LoginController::class, 'login']);
        Route::post('logout',[App\Http\Controllers\Doctor\Auth\LoginController::class, 'logout'])->name('doctor.logout');
        Route::get('/create/profile',[App\Http\Controllers\Doctor\CreateProfile::class, 'index'])->name('doctor.create_profile');
        Route::get('/patient/schedule/{slug}',[App\Http\Controllers\Doctor\ScheduleController::class,'index'])->name('schedule');
    });
   });