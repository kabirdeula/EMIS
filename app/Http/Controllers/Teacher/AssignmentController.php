<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Assignments;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = Assignments::all();
        return view('teacher.components.assignments.index', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.components.assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required',
        ]);

        $assignments = new Assignments();
        $assignments->title = $request->input('title');
        $assignments->description = $request->input('description');
        $assignments->due_date = $request->input('due_date');
        $assignments->save();

        return redirect()->route('teacher.assignments')->with('success', 'Assignment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assignments = Assignments::findOrFail($id);

        return view('teacher.components.assignments.show', compact('assignments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $assignments = Assignments::findOrFail($id);

        return view('teacher.components.assignments.edit', compact('assignments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $assignments = Assignments::findOrFail($id);
        $assignments->title = $request->input('title');
        $assignments->description = $request->input('description');
        $assignments->due_date = $request->input('due_date');
        $assignments->save();

        return redirect()->route('teacher.assignments')->with('success', 'Assignment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $assignments = Assignments::findOrFail($id);
        $assignments->delete();

        return redirect()->route('teacher.assignments')->with('success', 'Assignment deleted successfully');
    }
}

// use App\Models\Assignment;
// use App\Models\Courses;
// use App\Models\Programs;
// use App\Models\Semester;
// use App\Models\Teachers;
// use Illuminate\Support\Facades\Auth;

// class AssignmentController extends Controller
// {
    // public function index()
    // {
        // Retrieve the currently logged-in user
        // $user = Auth::user();

        // if ($user->type === 2) {
        //     $teacher = $user->teacher;
        // }

        // if ($user->type === 2) {
        //     $teacher = $user->teacher;
        // }

        // $assignments = Assignments::select('assignments.title', 'assignments.description', 'programs.code as program_code', 'semesters.code as semester_code', 'courses.name as course_name', 'teacher.first_name', 'teacher.last_name')
        //     ->join('programs', 'assignments.program_id', '=', 'programs.id')
        //     ->join('semesters', 'assignments.semester_id', '=', 'semesters.id')
        //     ->join('courses', 'assignments.course_id', '=', 'courses.id')
        //     ->join('teacher', 'assignments.teacher_id', '=', 'teacher.id')
        //     ->where('teacher.user_id', $teacher->user_id)
        //     ->get();

        // $assignments = Assignments::join('teacher', 'assignments.teacher_id', '=', 'teacher.id')
        //     ->join('courses', 'assignments.course_id', '=', 'courses.id')
        //     ->select('assignments.*', 'teacher.first_name as teacher_name', 'courses.name as course_name')
        //     ->get();

    // }

//     public function create()
//     {
//         $teacher = Teachers::all();
//         $programs = Programs::all();
//         $semesters = Semester::all();
//         $courses = Courses::all();
//         return view('teacher.components.assignments.create', compact('courses', 'programs', 'semesters', 'teacher'));
//     }

//     public function store(Request $request)
//     {
//         $teacher = Auth::user()->teacher;
//         $assignment->program_id = $request->input('program_id');
//         $assignment->semester_id = $request->input('semester_id');
//         $assignment->course_id = $request->input('course_id');
//         $assignment->teacher_id = $request->input('teacher_id');
//         $assignment->save();

//         return redirect('/teacher/assignments')->with('success', 'Assignment created successfully.');
//     }

//     public function show($id)
//     {

//         $courses = Courses::findOrFail($id);
//         $programs = Programs::findOrFail($id);
//         $semesters = Semester::findOrFail($id);
//         $teacher = Teachers::findOrFail($id);
//         return view('teacher.components.assignments.read', compact('assignments', 'courses', 'programs', 'semesters', 'teacher'));
//     }

//     public function edit($id)
//     {
//         $courses = Courses::all();
//         return view('teacher.components.assignments.update', compact('assignment', 'courses'));
//     }

//     public function update(Request $request, $id)
//     {
//         $teacher = Auth::user()->teacher;
//         $assignment->program_id = $request->input('program_id');
//         $assignment->semester_id = $request->input('semester_id');
//         $assignment->course_id = $request->input('course_id');
//         $assignment->teacher_id = $request->input('teacher_id');
//         $assignment->save();

//         return redirect('/teacher/assignments')->with('success', 'Assignment updated successfully.');
//     }

