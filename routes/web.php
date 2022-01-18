<?php

use App\Models\Doctor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorRegController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\PatientDetailsController;
use App\Http\Controllers\PatientRegStoreController;
use App\Http\Controllers\PatientRegistrationController;


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
 

Route::get('/',[HomeController::class,'home'])->name('website');

//for admin login
Route::get('/admin/login', [UserController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [UserController::class, 'dologin'])->name('admin.dologin');


Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function(){
    Route::get('/', function(){
        return view('master');
    })->name('home');

Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');    
    //for AdminController
Route::get('/manage/patient', [AdminController::class, 'ManagePatient'])->name('manage.patient');


//for patientController
Route::get('/create/patient', [PatientController::class, 'CreatePatient']);
Route::get('/manage/patient_details', [PatientController::class, 'ManagePatientDetails'])->name('manage.patient.details');
Route::get('/patient/registration',[PatientController::class,'registration'])->name('patient.registration.form');
Route::get('/patient/registration',[PatientController::class,'registration'])->name('patient.registration.form');
Route::post('/patient/store',[PatientController::class,'patientStore'])->name('patient.store');
Route::post('/patient/reg_store',[PatientController::class,'patientRegStore'])->name('patient.store.reg');

//for DoctorController
Route::get('/manage/doctor', [DoctorController::class, 'ManageDoctor'])->name('manage.doctor');
Route::get('/manage/dashboard', [DoctorController::class, 'ManageDashboard'])->name('manage.dashboard');
Route::get('/manage/doctor_reg', [DoctorController::class, 'ManageDoctorReg'])->name('doctor.registration.form');
Route::post('/manage/doctor_reg', [DoctorController::class, 'DoctorRegForm'])->name('doctor.registration.store');
Route::get('/view/doctor', [DoctorController::class, 'viewDoctorlist'])->name('view.doctor.list');
 
Route::get('doctor/view/{doctor_id}',[DoctorController::class,'DoctorView'])->name('admin.doctor.view');
Route::get('doctor/delete/{doctor_id}',[DoctorController::class,'DoctorDelete'])->name('admin.doctor.delete');
Route::get('doctor/edit/{doctor_id}',[DoctorController::class,'DoctorEdit'])->name('admin.doctor.edit');
Route::put('doctor/update/{doctor_id}',[DoctorController::class,'DoctorUpdate'])->name('admin.doctor.update');





//for DoctorScheduleController

Route::get('/add/schedule', [DoctorController::class, 'AddDoctorSchedule'])->name('doctor.schedule');

Route::get('/manage/doctor_schedule', [DoctorController::class, 'ManageDoctorSchedule'])->name('doctor.schedule.form');

Route::post('/manage/doctor_schedule/add', [DoctorController::class, 'AddDoctorScheduleForm'])->name('doctor.schedule.add');


//for PatientRegistrationController



Route::post('/patient/store',[PatientRegistrationController::class,'patientStore'])->name('patient.store');

//for PatientRegistration
// Route::get('/manage/patient_details', [PatientDetailsController::class, 'ManagePatientDetails']);
// Route::get('/patient/registration',[PatientRegistrationController::class,'registration'])->name('patient.registration.form');
// Route::post('/patient/reg_store',[PatientRegistrationController::class,'patientRegStore'])->name('patient.store.reg');




//for AppointmentController
Route::get('/manage/appointment', [AppointmentController::class, 'ManageAppointment'])->name('manage.appointment');

Route::get('/manage/appointment/add', [AppointmentController::class, 'ManageAppointmentAdd'])->name('manage.appointment.add');

Route::post('/manage/appointment/form', [AppointmentController::class, 'ManageAppointmentForm'])->name('manage.appointment.form');



//for DepartmentController
Route::get('/manage/department', [DepartmentController::class, 'ManageDepartment'])->name('manage.department');


Route::get('/manage/department/add', [DepartmentController::class, 'ManageDepartmentAdd'])->name('manage.department.add');

Route::post('/manage/department/form', [DepartmentController::class, 'ManageDepartmentForm'])->name('manage.department.form');
});  




