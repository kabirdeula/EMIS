<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Programs;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_count = User::count();
        $teacher_count = Teachers::count();
        $student_count = Students::count();
        $program_count = Programs::count();
        $course_count = Courses::count();

        return view('admin.home', compact('user_count', 'teacher_count', 'student_count', 'program_count', 'course_count'));
    }

}
