<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Programs;
use App\Models\Semester;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;

class TeachersRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teachers::paginate(5);
        return view('admin.components.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('type', 2)->get();
        $programs = Programs::all();
        $semesters = Semester::all();
        return view('admin.components.teachers.create', compact('programs', 'semesters', 'users'));
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
        ]);

        $teachers = new Teachers();
        $teachers -> user_id = $request -> input('user_id');
        $teachers -> program_id = $request -> input('program_id');
        $teachers -> semester_id = $request -> input('semester_id');
        $teachers -> course_id = $request -> input('course_id');
        $teachers -> save();

        return redirect() -> route('teachers') -> with('success', 'Teacher added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teachers::findOrFail($id);
        $users = User::findOrFail($id);
        $programs = Programs::all();
        $semesters = Semester::all();
        return view('admin.components.teachers.show', compact('teachers', 'programs', 'users', 'semesters'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teachers::findOrFail($id);
        $programs = Programs::all();
        $semesters = Semester::all();
        $users = User::all();
        return view('admin.components.teachers.edit', compact('teachers', 'programs', 'semesters', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teachers = Teachers::findOrFail($id);
        $teachers -> user_id = $request -> input('user_id');
        $teachers -> program_id = $request -> input('program_id');
        $teachers -> semester_id = $request -> input('semester_id');
        $teachers -> course_id = $request -> input('course_id');
        $teachers -> save();

        return redirect() -> route('teachers') -> with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teachers = Teachers::findOrFail($id);
        $teachers -> delete();

        return redirect() -> route('teachers') -> with('danger', 'Teacher deleted successfully');
    }
}
