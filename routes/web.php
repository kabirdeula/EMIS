<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AttendanceRecordsController;
use App\Http\Controllers\Admin\CoursesRecordsController;
use App\Http\Controllers\Admin\HolidaysRecordsController;
use App\Http\Controllers\Admin\MarksRecordsController;
use App\Http\Controllers\Admin\PDFController;
use App\Http\Controllers\Admin\PredictionController;
use App\Http\Controllers\Admin\ProgramsRecordsController;
use App\Http\Controllers\Admin\StudentsRecordsController;
use App\Http\Controllers\Admin\TeachersRecordsController;
use App\Http\Controllers\Admin\TrainAndTestController;
use App\Http\Controllers\Admin\UsersRecordsController;

use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\StudentAssignmentController;

use App\Http\Controllers\Teacher\AssignmentController;
use App\Http\Controllers\Teacher\TeacherController;

use App\Http\Controllers\ParentController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Students Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:student'])->group(function () {
    Route::get('student/home', [StudentController::class, 'index'])->name('home');

    /**
     * ! Assignments
     */
    Route::get('/student/assignments', [StudentAssignmentController::class, 'index'])->name('student.assignments');
    Route::get('/student/assignments/create', [StudentAssignmentController::class, 'create'])->name('student.assignments.create');
    Route::post('/student/assignments', [StudentAssignmentController::class, 'store'])->name('student.assignments.store');
    Route::get('/student/assignments/{id}', [StudentAssignmentController::class, 'show'])->name('student.assignments.show');
    Route::get('/student/assignments/{id}/edit', [StudentAssignmentController::class, 'edit'])->name('student.assignments.edit');
    Route::put('/student/assignments/{id}', [StudentAssignmentController::class, 'update'])->name('student.assignments.update');
    Route::delete('/student/assignments/{id}', [StudentAssignmentController::class, 'destroy'])->name('student.assignments.destroy');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/profile/', [AdminProfileController::class, 'show'])->name('admin.profile');

    /**
     * ! Algorithm
     */
    Route::get('/admin/prediction', [PredictionController::class, 'index'])->name('prediction');

    /**
     * ! Attendance Group
     */
    Route::get('/admin/attendances', [AttendanceRecordsController::class, 'index'])->name('attendances');
    Route::get('/admin/attendances/create', [AttendanceRecordsController::class, 'create'])->name('attendances.create');
    Route::post('/admin/attendances', [AttendanceRecordsController::class, 'store'])->name('attendances.store');
    Route::get('/admin/attendances/{id}', [AttendanceRecordsController::class, 'show'])->name('attendances.show');
    Route::get('/admin/attendances/{id}/edit', [AttendanceRecordsController::class, 'edit'])->name('attendances.edit');
    Route::put('/admin/attendances/{id}', [AttendanceRecordsController::class, 'update'])->name('attendances.update');
    Route::delete('/admin/attendances/{id}', [AttendanceRecordsController::class, 'destroy'])->name('attendances.destroy');


    /**
     * ! Courses Group
     */
    Route::get('/admin/courses', [CoursesRecordsController::class, 'index'])->name('courses');
    Route::get('/admin/courses/create', [CoursesRecordsController::class, 'create'])->name('courses.create');
    Route::post('/admin/courses', [CoursesRecordsController::class, 'store'])->name('courses.store');
    Route::get('/admin/courses/{id}', [CoursesRecordsController::class, 'show'])->name('courses.show');
    Route::get('/admin/courses/{id}/edit', [CoursesRecordsController::class, 'edit'])->name('courses.edit');
    Route::put('/admin/courses/{id}', [CoursesRecordsController::class, 'update'])->name('courses.update');
    Route::delete('/admin/courses/{id}', [CoursesRecordsController::class, 'destroy'])->name('courses.destroy');
    /**
     * ! Marks Group
     */
    Route::get('/admin/marks', [MarksRecordsController::class, 'index'])->name('marks');
    Route::get('/admin/marks/create', [MarksRecordsController::class, 'create'])->name('marks.create');
    Route::post('/admin/marks/store', [MarksRecordsController::class, 'store'])->name('marks.store');
    Route::get('/admin/marks/{id}', [MarksRecordsController::class, 'show'])->name('marks.show');
    Route::get('/admin/marks/{id}/edit', [MarksRecordsController::class, 'edit'])->name('marks.edit');
    Route::put('/admin/marks/{id}', [MarksRecordsController::class, 'update'])->name('marks.update');
    Route::delete('/admin/marks/{id}', [MarksRecordsController::class, 'destroy'])->name('marks.destroy');

    /**
     * ! Holidays Group
     */
    Route::get('/admin/holidays', [HolidaysRecordsController::class, 'index'])->name('holidays');
    Route::get('/admin/holidays/create', [HolidaysRecordsController::class, 'create'])->name('holidays.create');
    Route::post('/admin/holidays', [HolidaysRecordsController::class, 'store'])->name('holidays.store');
    Route::get('/admin/holidays/{id}', [HolidaysRecordsController::class, 'show'])->name('holidays.show');
    Route::get('/admin/holidays/{id}/edit', [HolidaysRecordsController::class, 'edit'])->name('holidays.edit');
    Route::put('/admin/holidays/{id}', [HolidaysRecordsController::class, 'update'])->name('holidays.update');
    Route::delete('/admin/holidays/{id}', [HolidaysRecordsController::class, 'destroy'])->name('holidays.destroy');

    /**
     *! PDF Group
     */
    Route::get('/admin/pdf/attendance', [PDFController::class, 'AttendancePDF'])->name('attendances.pdf');
    Route::get('/admin/pdf/holiday', [PDFController::class, 'HolidayPDF'])->name('holidays.pdf');
    Route::get('/admin/pdf/student', [PDFController::class, 'StudentPDF'])->name('students.pdf');
    Route::get('/admin/pdf/teacher', [PDFController::class, 'TeacherPDF'])->name('teachers.pdf');
    Route::get('/admin/pdf/user', [PDFController::class, 'UsersPDF'])->name('users.pdf');

    /**
     * ! Programs Group
     */
    Route::get('/admin/programs', [ProgramsRecordsController::class, 'index'])->name('programs');
    Route::get('/admin/programs/create', [ProgramsRecordsController::class, 'create'])->name('programs.create');
    Route::post('/admin/programs', [ProgramsRecordsController::class, 'store'])->name('programs.store');
    Route::get('/admin/programs/{id}', [ProgramsRecordsController::class, 'show'])->name('programs.show');
    Route::get('/admin/programs/{id}/edit', [ProgramsRecordsController::class, 'edit'])->name('programs.edit');
    Route::put('/admin/programs/{id}', [ProgramsRecordsController::class, 'update'])->name('programs.update');
    Route::delete('/admin/programs/{id}', [ProgramsRecordsController::class, 'destroy'])->name('programs.destroy');

    /**
     * ! Students Group
     */
    Route::get('/admin/students', [StudentsRecordsController::class, 'index'])->name('students');
    Route::get('/admin/students/create', [StudentsRecordsController::class, 'create'])->name('students.create');
    Route::post('/admin/students', [StudentsRecordsController::class, 'store'])->name('students.store');
    Route::get('/admin/students/{id}', [StudentsRecordsController::class, 'show'])->name('students.show');
    Route::get('/admin/students/{id}/edit', [StudentsRecordsController::class, 'edit'])->name('students.edit');
    Route::put('/admin/students/{id}', [StudentsRecordsController::class, 'update'])->name('students.update');
    Route::delete('/admin/students/{id}', [StudentsRecordsController::class, 'destroy'])->name('students.destroy');

    /**
     * ! Teachers Group
     */
    Route::get('/admin/teachers', [TeachersRecordsController::class, 'index'])->name('teachers');
    Route::get('/admin/teachers/create', [TeachersRecordsController::class, 'create'])->name('teachers.create');
    Route::post('/admin/teachers', [TeachersRecordsController::class, 'store'])->name('teachers.store');
    Route::get('/admin/teachers/{id}', [TeachersRecordsController::class, 'show'])->name('teachers.show');
    Route::get('/admin/teachers/{id}/edit', [TeachersRecordsController::class, 'edit'])->name('teachers.edit');
    Route::put('/admin/teachers/{id}', [TeachersRecordsController::class, 'update'])->name('teachers.update');
    Route::delete('/admin/teachers/{id}', [TeachersRecordsController::class, 'destroy'])->name('teachers.destroy');

    /**
     *! Users Group
     */
    Route::get('/admin/users', [UsersRecordsController::class, 'index'])->name('users');
    Route::get('/admin/users/create', [UsersRecordsController::class, 'create'])->name('users.create');
    Route::post('/admin/users/', [UsersRecordsController::class, 'store'])->name('users.store');
    Route::get('/admin/users/{id}', [UsersRecordsController::class, 'show'])->name('users.show');
    Route::get('/admin/users/{id}/edit', [UsersRecordsController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{id}', [UsersRecordsController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{id}/', [UsersRecordsController::class, 'destroy'])->name('users.destroy');
});

/*------------------------------------------
--------------------------------------------
All Teacher Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:teacher'])->group(function () {
    Route::get('/teacher/home', [TeacherController::class, 'index'])->name('teacher.home');

    /**
     * ! Assignments
     */
    Route::get('/teacher/assignments', [AssignmentController::class, 'index'])->name('teacher.assignments');
    Route::get('/teacher/assignments/create', [AssignmentController::class, 'create'])->name('teacher.assignments.create');
    Route::post('/teacher/assignments', [AssignmentController::class, 'store'])->name('teacher.assignments.store');
    Route::get('/teacher/assignments/{id}', [AssignmentController::class, 'show'])->name('teacher.assignments.show');
    Route::get('/teacher/assignments/{id}/edit', [AssignmentController::class, 'edit'])->name('teacher.assignments.edit');
    Route::put('/teacher/assignments/{id}', [AssignmentController::class, 'update'])->name('teacher.assignments.update');
    Route::delete('/teacher/assignments/{id}', [AssignmentController::class, 'destroy'])->name('teacher.assignments.destroy');
});

/*------------------------------------------
--------------------------------------------
All Parent Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:parent'])->group(function () {
    Route::get('/parent/home', [ParentController::class, 'index'])->name('parent.home');
});

