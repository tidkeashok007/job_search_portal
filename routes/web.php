<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\admindashboardController;
use App\Http\Controllers\employeedashboardController;
use App\Http\Controllers\employerdashboardController;


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


// indexcontroller paths
Route::get('/', [indexController::class,'index'])->name('index');
Route::get('/about', [indexController::class, 'about'])->name('about');
Route::get('/contact', [indexController::class, 'contact'])->name('contact');


// UserController paths
Route::get('/usersignup', [UserController::class, 'usersignup'])->name('usersignup');
Route::get('/userlogin', [UserController::class, 'userlogin'])->name('userlogin');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');


// admin_____dashboardController paths
Route::middleware(['role:admin', 'auth'])->group(function () {
Route::get('/admindashboard', [admindashboardController::class, 'admindashboard'])->name('admindashboard');
Route::get('/pages_profile_settings', [admindashboardController::class, 'pages_profile_settings']);
Route::get('/admin_application', [admindashboardController::class, 'admin_application'])->name('admin_application');
Route::get('/admin_employee_dtl', [admindashboardController::class, 'admin_employee_dtl'])->name('admin_employee_dtl');
Route::get('/admin_employer_dtl', [admindashboardController::class, 'admin_employer_dtl'])->name('admin_employer_dtl');
Route::get('/admin_employer_req', [admindashboardController::class, 'admin_employer_req'])->name('admin_employer_req');
Route::get('/admin_jobPost_req', [admindashboardController::class, 'admin_jobPost_req'])->name('admin_jobPost_req');
Route::post('job_Post_Approve', [admindashboardController::class, 'job_Post_Approve'])->name('job_Post_Approve');
Route::post('employee_Approve', [admindashboardController::class, 'employee_Approve'])->name('employee_Approve');
Route::get('/admin_contact', [admindashboardController::class, 'admin_contact'])->name('admin_contact');
Route::get('/admin_about', [admindashboardController::class, 'admin_about'])->name('admin_about');
Route::get('/admin_profile', [admindashboardController::class, 'admin_profile'])->name('admin_profile');
});

// employee_____dashboardController paths
Route::middleware(['role:employee', 'auth'])->group(function () {
Route::get('/employeedashboard', [employeedashboardController::class, 'employeedashboard'])->name('employeedashboard');
Route::post('apply_Job', [employeedashboardController::class, 'apply_Job'])->name('apply_Job');
Route::get('/employee_contact', [employeedashboardController::class, 'employee_contact'])->name('employee_contact');
Route::get('/employee_about', [employeedashboardController::class, 'employee_about'])->name('employee_about');
Route::get('/employee_profile', [employeedashboardController::class, 'employee_profile'])->name('employee_profile');
});

// employer_____dashboardController paths
Route::middleware(['role:employer', 'auth'])->group(function () {
Route::get('/employerdashboard', [employerdashboardController::class, 'employerdashboard'])->name('employerdashboard');
Route::post('/jobPost', [employerdashboardController::class, 'jobPost'])->name('jobPost');
Route::get('/employee_applied', [employerdashboardController::class, 'employee_applied'])->name('employee_applied');
Route::get('/employer_contact', [employerdashboardController::class, 'employer_contact'])->name('employer_contact');
Route::get('/employer_about', [employerdashboardController::class, 'employer_about'])->name('employer_about');
Route::get('/employer_profile', [employerdashboardController::class, 'employer_profile'])->name('employer_profile');
});




// Route::middleware(['auth'])->group(function () {
//     Route::post('/logout', [logoutController::class, 'logout'])->name('logout');
// });
Route::middleware(['role:employee', 'auth'])->group(function () {
Route::post('logout', [logoutController::class, 'logout'])->name('logout');
});