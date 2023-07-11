<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Prediction;
use App\Models\Programs;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;

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
        $male = User::where('gender', 'Male')->count();
        $female = User::where('gender', 'Female')->count();
        $excellent = Prediction::where('prediction', 'excellent')->count();
        $best = Prediction::where('prediction', 'best')->count();
        $very_good = Prediction::where('prediction', 'very good')->count();
        $good = Prediction::where('prediction', 'good')->count();
        $average = Prediction::where('prediction', 'average')->count();
        $fair = Prediction::where('prediction', 'fair')->count();
        $bad = Prediction::where('prediction', 'bad')->count();


        return view('admin.home', compact('user_count', 'teacher_count', 'student_count', 'program_count', 'course_count', 'male', 'female', 'excellent', 'best', 'very_good', 'good', 'average', 'fair', 'bad'));
    }

}
