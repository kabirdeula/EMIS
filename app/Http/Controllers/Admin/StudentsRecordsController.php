<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Programs;
use App\Models\Semester;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentsRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        return view('admin.components.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('type', 0)->get();
        $programs = Programs::all();
        $semesters = Semester::all();
        return view('admin.components.students.create', compact('programs', 'semesters', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'program_id' => 'required',
            'semester_id' => 'required',
            'course_id' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
        ]);

        $students = new Students();
        $students -> user_id = $request -> input('user_id');
        $students -> program_id = $request -> input('program_id');
        $students -> semester_id = $request -> input('semester_id');
        $students -> course_id = $request -> input('course_id');
        $students -> date_of_birth = $request -> input('date_of_birth');
        $students -> phone_number = $request -> input('phone_number');
        $students -> save();

        return redirect() -> route('students') -> with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Students::findOrFail($id);
        $users = User::findOrFail($id);
        $programs = Programs::all();
        $semesters = Semester::all();
        return view('admin.components.students.show', compact('students', 'programs', 'users', 'semesters'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Students::findOrFail($id);
        $programs = Programs::all();
        $semesters = Semester::all();
        $users = User::all();
        return view('admin.components.students.edit', compact('students', 'programs', 'semesters', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Students::findOrFail($id);
        $students -> user_id = $request -> input('user_id');
        $students -> program_id = $request -> input('program_id');
        $students -> semester_id = $request -> input('semester_id');
        $students -> course_id = $request -> input('course_id');
        $students -> date_of_birth = $request -> input('date_of_birth');
        $students -> phone_number = $request -> input('phone_number');
        $students -> save();

        return redirect() -> route('students') -> with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Students::findOrFail($id);
        $students -> delete();

        return redirect() -> route('students') -> with('success', 'Student deleted successfully');
    }
}
