<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Assignments;
use App\Models\Courses;
use App\Models\Programs;
use App\Models\Semester;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    public function index()
    {
        // $assignments = Assignments::all();
        // Retrieve the currently logged-in user
        $user = Auth::user();

        if ($user->type === 2) {
            $teacher = $user->teacher;

            $assignments = Assignments::select('assignments.title', 'assignments.description', 'programs.code as program_code', 'semesters.code as semester_code', 'courses.name as course_name', 'teachers.first_name', 'teachers.last_name')
                ->join('programs', 'assignments.program_id', '=', 'programs.id')
                ->join('semesters', 'assignments.semester_id', '=', 'semesters.id')
                ->join('courses', 'assignments.course_id', '=', 'courses.id')
                ->join('teachers', 'assignments.teacher_id', '=', 'teachers.id')
                ->where('teachers.user_id', $teacher->user_id)
                ->get();

            return view('teacher.components.assignments.index', compact('assignments'));
        }

        // if ($user->type === 2) {
        //     $teacher = $user->teacher;
        // }

        // $assignments = Assignments::select('assignments.title', 'assignments.description', 'programs.code as program_code', 'semesters.code as semester_code', 'courses.name as course_name', 'teachers.first_name', 'teachers.last_name')
        //     ->join('programs', 'assignments.program_id', '=', 'programs.id')
        //     ->join('semesters', 'assignments.semester_id', '=', 'semesters.id')
        //     ->join('courses', 'assignments.course_id', '=', 'courses.id')
        //     ->join('teachers', 'assignments.teacher_id', '=', 'teachers.id')
        //     ->where('teachers.user_id', $teacher->user_id)
        //     ->get();

        // return view('teacher.components.assignments.index', compact('assignments'));

        // $assignments = Assignments::join('teachers', 'assignments.teacher_id', '=', 'teachers.id')
        //     ->join('courses', 'assignments.course_id', '=', 'courses.id')
        //     ->select('assignments.*', 'teachers.first_name as teacher_name', 'courses.name as course_name')
        //     ->get();

        // return view('teacher.components.assignments.index', compact('assignments'));
    }

    public function create()
    {
        $teachers = Teachers::all();
        $programs = Programs::all();
        $semesters = Semester::all();
        $courses = Courses::all();
        return view('teacher.components.assignments.create', compact('courses', 'programs', 'semesters', 'teachers'));
    }

    public function store(Request $request)
    {
        $teacher = Auth::user()->teacher;
        $assignment = new Assignments;
        $assignment->title = $request->input('title');
        $assignment->description = $request->input('description');
        $assignment->due_date = $request->input('due_date');
        $assignment->program_id = $request->input('program_id');
        $assignment->semester_id = $request->input('semester_id');
        $assignment->course_id = $request->input('course_id');
        $assignment->teacher_id = $request->input('teacher_id');
        $assignment->save();

        return redirect('/teacher/assignments')->with('success', 'Assignment created successfully.');
    }

    public function show($id)
    {

        $assignment = Assignments::findOrFail($id);
        $courses = Courses::findOrFail($id);
        $programs = Programs::findOrFail($id);
        $semesters = Semester::findOrFail($id);
        $teachers = Teachers::findOrFail($id);
        return view('teacher.components.assignments.read', compact('assignment', 'courses', 'programs', 'semesters', 'teachers'));
    }

    public function edit($id)
    {
        $assignment = Assignments::findOrFail($id);
        $courses = Courses::all();
        return view('teacher.components.assignments.update', compact('assignment', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Auth::user()->teacher;
        $assignment = Assignments::findOrFail($id);
        $assignment->title = $request->input('title');
        $assignment->description = $request->input('description');
        $assignment->due_date = $request->input('due_date');
        $assignment->program_id = $request->input('program_id');
        $assignment->semester_id = $request->input('semester_id');
        $assignment->course_id = $request->input('course_id');
        $assignment->teacher_id = $request->input('teacher_id');
        $assignment->save();

        return redirect('/teacher/assignments')->with('success', 'Assignment updated successfully.');
    }

    public function destroy($id)
    {
        $assignment = Assignments::findOrFail($id);
        $assignment->delete();

        return redirect('/teacher/assignments')->with('success', 'Assignment updated successfully.');
    }
}
