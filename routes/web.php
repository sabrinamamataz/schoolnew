<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserAuthController;
use App\Http\controllers\StudentController;
use App\Http\controllers\TeacherController;
use App\Http\controllers\ClassController;
use App\Http\controllers\RoutineController;
use App\Http\Controllers\SubjectController;

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
    // return view('main');
    return redirect()->route('login_page');
});


// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/login', [UserAuthController::class, 'login'])->name('login_page');
Route::get('/registion', [UserAuthController::class, 'registion'])->name('registion_page');
Route::post('/login', [UserAuthController::class, 'loginAuth'])->name('login_auth');
Route::post('/register', [UserAuthController::class, 'registerAuth'])->name('register_auth');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {
    // admin
    Route::get('/admin-dashboard', [SectionController::class, 'adminDashboard'])->name('admin_dashboard');
    Route::get('/student-list', [AdminController::class, 'studentList'])->name('student_list');

    // subject
    Route::get('/subject', [SubjectController::class, 'subjectList'])->name('subject_list');
    Route::post('/section/add', [SubjectController::class, 'addSubject'])->name('add_subject');
    // class
    Route::get('/class-admin-dashboard', [ClassController::class, 'classDashboard'])->name('class_admin_dashboard');
    Route::post('/class/store', [ClassController::class, 'store'])->name('add_class');
    Route::get('/class/delete/{id}', [ClassController::class, 'destroy'])->name('delete_class');
    Route::post('/class/update', [ClassController::class, 'update'])->name('class_update');
    // section
    Route::get('/section-admin-dashboard', [SectionController::class, 'sectionDashboard'])->name('section_admin_dashboard');
    Route::post('/section/store', [SectionController::class, 'store'])->name('add_section');
    Route::get('/section/delete/{id}', [SectionController::class, 'destroy'])->name('delete_section');
    Route::post('/section/update', [SectionController::class, 'update'])->name('section_update');
    Route::get('/section-admin-dashboard/{section_id}', [SectionController::class, 'sectionStudentList'])->name('section_student_list');
    Route::get('/add-student-section/{std_ids}/{section_id}', [SectionController::class, 'addStudentToSection'])->name('add_student_to_section');


    // period
    Route::get('/class-period', [RoutineController::class, 'periodPage'])->name('period_page');
    Route::post('/class-period/add', [RoutineController::class, 'addPeriod'])->name('add_period');

    //   routine
    Route::get('/routine-admin-dashboard', [RoutineController::class, 'routineDashboard'])->name('routine_admin_dashboard');
    Route::post('/routine/store', [RoutineController::class, 'store'])->name('add_routine');
    Route::post('/routine/update', [RoutineController::class, 'update'])->name('routine_update');
    Route::post('/routine/update-week-day', [RoutineController::class, 'updateWeekDay'])->name('routine_update_week_day');

    // student
    Route::get('/student-dashboard', [StudentController::class, 'studentDashboard'])->name('student_dashboard');
    Route::get('/updateprofile-student-dashboard', [StudentController::class, 'updateprofileDashboard'])->name('updateprofile_student_dashboard');
    Route::post('/student-profile-update', [StudentController::class, 'updateStudentData'])->name('update_student_profile');
    Route::get('/routine-student-dashboard', [StudentController::class,  'routineDashboard'])->name('routine_student_dashboard');


    // teacher
    Route::get('/teacher-dashboard', [TeacherController::class, 'teacherDashboard'])->name('teacher_dashboard');
    Route::get('/updateprofile-teacher-dashboard', [TeacherController::class, 'updateprofileDashboard'])->name('updateprofile_teacher_dashboard');
    Route::post('/teacher-profile-update', [TeacherController::class, 'updateTeacherData'])->name('update_teacher_profile');

    //teacher routine
    Route::get('/routine-dashboard', [TeacherController::class,  'routineDashboard'])->name('routine_dashboard');
    //teacher attendance
    Route::get('/teacher-attendance', [TeacherController::class, 'attendancePage'])->name('attendance_page');
    Route::post('/create-attendance', [AttendanceController::class,  'createAttendance'])->name('create_attendance');
    Route::get('/take-attendance/{attendance_id}', [AttendanceController::class,  'takeAttendance'])->name('take_attendance');
    Route::get('/check-attendance/{attendance_id}', [AttendanceController::class,  'checkAttendance'])->name('check_attendance');
    Route::post('/update-attendance', [AttendanceController::class,  'updateAttendance'])->name('update_attendance');

    //admin attendance
    Route::get('/admin-attendance', [AdminController::class, 'attendancePage'])->name('attendance_admin');
    Route::post('/admin-create-attendance', [AdminController::class,  'createAttendance'])->name('admin_create_attendance');
    Route::get('/admin-check-attendance/{attendance_id}', [AdminController::class,  'checkAttendance'])->name('admin_check_attendance');
    


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
