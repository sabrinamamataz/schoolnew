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
use App\Http\Controllers\StudyMaterialController;
use App\Http\Controllers\NoticeController;

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

// Route::get('/welcome', function () {
//     return view('student.index');
// })->name('welcome');
// Route::get('/welcome', function () {
//     return view('teacher.index');
// })->name('welcome');
// Route::get('/welcome', function () {
//     return view('.index');
// })->name('welcome');

Route::get('/', [UserAuthController::class, 'authCheckAndRedirect']);

Route::get('/login', [UserAuthController::class, 'login'])->name('login_page');
Route::get('/registration', [UserAuthController::class, 'registration'])->name('registration_page');
Route::post('/login', [UserAuthController::class, 'loginAuth'])->name('login_auth');
Route::post('/register', [UserAuthController::class, 'registerAuth'])->name('register_auth');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {
    // admin panel
    Route::group(['middleware' => 'admin-auth'], function () {
        Route::get('/admin-dashboard', [SectionController::class, 'adminDashboard'])->name('admin_dashboard');
        Route::get('/student-list/{class_id}', [AdminController::class, 'studentList'])->name('student_list');

        // admin teacher
        Route::get('/teachers', [AdminController::class, 'teacherList'])->name('teacher_list');

        // admin subject
        Route::get('/subject', [SubjectController::class, 'subjectList'])->name('subject_list');
        Route::post('/section/add', [SubjectController::class, 'addSubject'])->name('add_subject');
        Route::post('/subject/update', [SubjectController::class, 'updateSubject'])->name('update_subject');

        // admin class
        Route::get('/class-admin-dashboard', [ClassController::class, 'classDashboard'])->name('class_admin_dashboard');
        Route::post('/class/store', [ClassController::class, 'store'])->name('add_class');
        Route::post('/class/update', [ClassController::class, 'update'])->name('class_update');

        // admin section
        Route::get('/section-admin-dashboard', [SectionController::class, 'sectionDashboard'])->name('section_admin_dashboard');
        Route::post('/section/store', [SectionController::class, 'store'])->name('add_section');
        Route::post('/section/update', [SectionController::class, 'update'])->name('section_update');
        Route::get('/section-admin-dashboard/{section_id}', [SectionController::class, 'sectionStudentList'])->name('section_student_list');
        Route::get('/add-student-section/{std_ids}/{section_id}', [SectionController::class, 'addStudentToSection'])->name('add_student_to_section');

        // admin period
        Route::get('/class-period', [RoutineController::class, 'periodPage'])->name('period_page');
        Route::post('/class-period/add', [RoutineController::class, 'addPeriod'])->name('add_period');
        Route::post('/class-period/update', [RoutineController::class, 'updatePeriod'])->name('update_period');

        // admin routine
        Route::get('/routine-admin-dashboard', [RoutineController::class, 'routineDashboard'])->name('routine_admin_dashboard');
        Route::post('/routine/store', [RoutineController::class, 'store'])->name('add_routine');
        Route::post('/routine/update', [RoutineController::class, 'update'])->name('routine_update');
        Route::post('/routine/update-week-day', [RoutineController::class, 'updateWeekDay'])->name('routine_update_week_day');
        Route::post('/routine/update-teacher', [RoutineController::class, 'updateTeacher'])->name('routine_update_teacher');

        // admin study materials
        Route::get('/admin-study-materials', [StudyMaterialController::class, 'adminStudyMaterials'])->name('admin_study_materials');
        Route::get('/admin-study-materials/approve/{id}', [StudyMaterialController::class, 'approveStudyMaterials'])->name('approve_study_materials');
        Route::get('admin-study-material//delete/{id}', [StudyMaterialController::class, 'destroy'])->name('delete_admin_study_material');

        //admin notices
        Route::get('/notice-admin-dashboard', [NoticeController::class, 'noticeDashboard'])->name('notice_admin_dashboard');
        Route::post('/notice/store', [NoticeController::class, 'store'])->name('add_notice');
        Route::get('notice//delete/{id}', [NoticeController::class, 'destroy'])->name('delete_notice');
        Route::post('/notice/update', [NoticeController::class, 'update'])->name('notice_update');

        //admin attendance
        Route::get('/admin-attendance', [AdminController::class, 'attendancePage'])->name('attendance_admin');
        Route::get('/admin-check-attendance/{attendance_id}', [AdminController::class,  'checkAttendance'])->name('admin_check_attendance');
    });

    // student panel
    Route::group(['middleware' => 'student-auth'], function () {
        Route::get('/student-dashboard', [StudentController::class, 'studentDashboard'])->name('student_dashboard');
        Route::get('/student-profile', [StudentController::class, 'studentProfile'])->name('student_profile');
        Route::post('/student-profile-update', [StudentController::class, 'updateStudentData'])->name('update_student_profile');
        Route::get('/routine-student-dashboard', [StudentController::class,  'routineDashboard'])->name('routine_student_dashboard');
        Route::get('/student-attendance', [StudentController::class,  'studentAttendance'])->name('student_attendance');

        // student study materials
        Route::get('/student-study-materials', [StudyMaterialController::class, 'studentStudyMaterials'])->name('student_study_materials');

        //student attendance
        Route::get('/student-attendance', [StudentController::class, 'studentAttendance'])->name('student_attendance');

        //student notice
        Route::get('/notice-student-dashboard', [NoticeController::class, 'studentNoticeDashboard'])->name('notice_student_dashboard');
        Route::get('/notice-read-more/{id}', [NoticeController::class, 'noticeReadMore'])->name('notice_read_more');
    });

    // teacher panel
    Route::group(['middleware' => 'teacher-auth'], function () {
        Route::get('/teacher-dashboard', [TeacherController::class, 'teacherDashboard'])->name('teacher_dashboard');
        Route::get('/teacher-profile', [TeacherController::class, 'teacherProfile'])->name('teacher_profile');
        Route::post('/teacher-profile-update', [TeacherController::class, 'updateTeacherData'])->name('update_teacher_profile');

        //teacher routine
        Route::get('/teacher-routine', [TeacherController::class,  'routineDashboard'])->name('routine_dashboard');

        //teacher attendance
        Route::get('/teacher-attendance/{class_id}', [TeacherController::class, 'attendancePage'])->name('attendance_page');
        Route::post('/create-attendance', [AttendanceController::class,  'createAttendance'])->name('create_attendance');
        Route::get('/take-attendance/{attendance_id}', [AttendanceController::class,  'takeAttendance'])->name('take_attendance');
        Route::get('/check-attendance/{attendance_id}', [AttendanceController::class,  'checkAttendance'])->name('check_attendance');
        Route::post('/update-attendance', [AttendanceController::class,  'updateAttendance'])->name('update_attendance');

        //teacher study material
        Route::get('/teacher-study-material', [TeacherController::class, 'studyMaterialPage'])->name('teacher_study_material');
        Route::post('/study-material/store', [StudyMaterialController::class, 'store'])->name('add_study_material');
        Route::get('/study-material/delete/{id}', [StudyMaterialController::class, 'destroy'])->name('delete_study_material');
        Route::post('/study-material/update', [StudyMaterialController::class, 'update'])->name('study_material_update');

        //teacher notice
        Route::get('/notice-teacher-dashboard', [NoticeController::class, 'teacherNoticeDashboard'])->name('notice_teacher_dashboard');
        Route::get('/notice-read-more-teacher/{id}', [NoticeController::class, 'noticeTeacherReadMore'])->name('notice_read_more_teacher');
    });
});
