<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppoimentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialtyController;
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
//route login admin
Route::group(['prefix' => 'login'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('adminmanager.login');
    Route::post('/', [LoginController::class, 'check_login'])->name('adminmanager.login');
});
//route  admin
Route::group(['prefix' => 'manager', 'middleware' => 'auth'], function () {

    //manager
    Route::get('/', [AdminController::class, 'index'])->name('adminmanager.main');

    //logout
    Route::get('/logout', [AdminController::class, 'logout'])->name('adminmanager.logout');

    //doctor
    Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::get('/add-doctor', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('/add-doctor', [DoctorController::class, 'postcreate'])->name('doctor.create');
    Route::get('/edit-doctor/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::put('/edit-doctor', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('/delete-doctor/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');

    //blog
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/add-blog', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/add-blog', [BlogController::class, 'postcreate'])->name('blog.create');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/edit-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');

    //patient
    Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');

    //serive
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/add-service', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/add-service', [ServiceController::class, 'postcreate'])->name('service.create');
    Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/edit-service', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/delete-service/{id}', [ServiceController::class, 'delete'])->name('service.delete');

    //appointment
    Route::get('/appointment', [AppoimentController::class, 'index'])->name('appointment.index');

    //aspecialty
    Route::get('/specialty', [SpecialtyController::class, 'index'])->name('specialty.index');
    Route::get('/add-specialty', [SpecialtyController::class, 'create'])->name('specialty.create');
    Route::post('/add-specialty', [SpecialtyController::class, 'postcreate'])->name('specialty.create');
    Route::get('/edit-specialty/{id}', [SpecialtyController::class, 'edit'])->name('specialty.edit');
    Route::put('/edit-specialty', [SpecialtyController::class, 'store'])->name('specialty.store');
    Route::get('/delete-specialty/{id}', [SpecialtyController::class, 'delete'])->name('specialty.delete');

    //contactus
    Route::get('/contactus', [ContactController::class, 'index'])->name('contactus.index');

    //status
    Route::post('/editstatus', [AppoimentController::class, 'editstatus'])->name('appointment.editstatus');
    Route::post('/editstatuscontact', [ContactController::class, 'editstatus'])->name('contactus.editstatus');
});

//route clients
Route::group(['prefix' => '/'], function () {

    //home
    Route::get('/', [HomeController::class, 'home'])->name('home.index');

    //aboutus
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus.index');

    //contactus
    Route::get('/contactus', [HomeController::class, 'contactus'])->name('usercontactus.index');
    Route::post('/contactus', [HomeController::class, 'postcontactus'])->name('usercontactus.index');

    //blog search
    Route::get('/blog', [HomeController::class, 'blog'])->name('userblog.index');
    Route::get('/blogdetail/{id}', [HomeController::class, 'detailblog'])->name('userblog.detail');
    Route::get('/search', [HomeController::class, 'search'])->name('user.search');

    //doctor
    Route::get('/doctor', [HomeController::class, 'doctor'])->name('userdoctor.index');
    Route::get('/doctordetail/{id}', [HomeController::class, 'detaildoctor'])->name('userdoctor.detail');
    Route::get('/searchdoctor', [HomeController::class, 'searchdoctor'])->name('user.searchdoctor');

    //service
    Route::get('/services', [HomeController::class, 'services'])->name('userservice.index');
    Route::post('/add-services', [HomeController::class, 'postservices'])->name('postservice.index')->middleware('customer');
    Route::get('/searchservice', [HomeController::class, 'searchservice'])->name('user.searchservice');

    //appointment
    Route::get('/appointment/{id}', [HomeController::class, 'appointment'])->name('userappointment.index')->middleware('customer');
    Route::post('/make-appointment', [HomeController::class, 'postappointment'])->name('makeappointment.index')->middleware('customer');

    //login/logout/register
    Route::get('/patientlogin', [HomeController::class, 'login'])->name('userlogin.index');
    Route::post('/patientlogin', [HomeController::class, 'check_login'])->name('postuserlogin.index');
    Route::get('/logout', [HomeController::class, 'logout'])->name('clients.logout');
    Route::get('/register', [HomeController::class, 'register'])->name('clients.register');
    Route::post('/postregister', [HomeController::class, 'postregister'])->name('clients.postregister');

    //profile
    Route::get('/profile', [HomeController::class, 'profile'])->name('clients.profile')->middleware('customer');
    Route::put('/editprofile/{id}', [HomeController::class, 'postprofile'])->name('clients.postprofile')->middleware('customer');
});
