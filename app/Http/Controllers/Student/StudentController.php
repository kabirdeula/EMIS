<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student_id = auth()->user()->id;

        $present = Attendance::where('student_id', $student_id)->where('status', 'present')->count();
        $absent = Attendance::where('student_id', $student_id)->where('status', 'absent')->count();

        return view('student.home', compact('present', 'absent'));
    }
}
