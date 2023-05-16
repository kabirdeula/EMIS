<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersRecordsController;
use App\Http\Controllers\Student\StudentController;
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
    Route::get('student/assignment/submit', [AssignmentController::class, 'create'])->name('assignment.create');
    Route::post('student/assignment/submit', [AssignmentController::class, 'store'])->name('assignment.store');
    Route::post('student/assignment/', [AssignmentController::class, 'index'])->name('student.assignment');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/users', [UsersRecordsController::class, 'index'])->name('users.show');
});

/*------------------------------------------
--------------------------------------------
All Teacher Routes List
--------------------------------------------
--------------------------------------------*/
    Route::middleware(['auth', 'user-access:teacher'])->group(function () {
    Route::get('/teacher/home', [TeacherController::class, 'index'])->name('teacher.home');
    Route::get('/teacher/assignments', [AssignmentController::class, 'index'])->name('teacher.assignments');
    Route::get('/teacher/assignments/create', [AssignmentController::class, 'create'])->name('teacher.assignments.create');
    Route::post('/teacher/assignments', [AssignmentController::class, 'store'])->name('teacher.assignments.store');
    Route::get('/assignments/{id}', [AssignmentController::class, 'show'])->name('teacher.assignments.show');
    Route::get('/assignments/{id}/edit', [AssignmentController::class, 'edit'])->name('teacher.assignments.edit');
    Route::put('/assignments/{id}', [AssignmentController::class, 'update'])->name('teacher.assignments.update');
    Route::delete('/assignments/{id}', [AssignmentController::class, 'destroy'])->name('teacher.assignments.destroy');

    //     Route::get('teacher/assignments/create', [AssignmentController::class, 'create'])->name('assignments.create');
    //     Route::get('/teacher/assignments', [AssignmentController::class, 'store'])->name('assignments.store');
});

/*------------------------------------------
--------------------------------------------
All Parent Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:parent'])->group(function () {
    Route::get('/parent/home', [ParentController::class, 'index'])->name('parent.home');
});
