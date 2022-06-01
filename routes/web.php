<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserAuthController;
use App\Http\controllers\StudentController;
use App\Http\controllers\TeacherController;





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

Route::get('/welcome', function () {
    return view('student.index');
})->name('welcome');
Route::get('/welcome', function () {
    return view('teacher.index');
})->name('welcome');
Route::get('/welcome', function () {
    return view('.index');
})->name('welcome');
Route::get('/', function () {
    return view('main');
});


// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/login',[UserAuthController::class, 'login'])->name('login_page');
Route::get('/registion',[UserAuthController::class, 'registion'])->name('registion_page');
Route::post('/login',[UserAuthController::class, 'loginAuth'])->name('login_auth');
Route::post('/register',[UserAuthController::class, 'registerAuth'])->name('register_auth');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {
Route::get('/student-dashboard',[StudentController::class,'studentDashboard'])->name('student_dashboard');
Route::get('/teacher-dashboard',[TeacherController::class,'teacherDashboard'])->name('teacher_dashboard');
Route::get('/updateprofile-student-dashboard',[StudentController::class,'updateprofileDashboard'])->name('updateprofile_student_dashboard');
Route::get('/updateprofile-teacher-dashboard',[TeacherController::class,'updateprofileDashboard'])->name('updateprofile_teacher_dashboard');
Route::post('/updateprofile-dashboard/store', [TeacherController::class,'store'])->name('updateprofile_dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
