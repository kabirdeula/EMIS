<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Programs;
use App\Models\Semester;
use Illuminate\Http\Request;

class CoursesRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::paginate(5);
        return view('admin.components.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Programs::all();
        $semesters = Semester::all();
        return view('admin.components.courses.create', compact('programs', 'semesters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'credit_hour' => 'required',
            'program_id' => 'required',
            'semester_id' => 'required',
        ]);

        $courses = new Courses;
        $courses -> name = $request -> input('name');
        $courses -> code = $request -> input('code');
        $courses -> credit_hour = $request -> input('credit_hour');
        $courses -> program_id = $request -> input('program_id');
        $courses -> semester_id = $request -> input('semester_id');
        $courses -> save();

        return redirect() -> route('courses') -> with('success', 'Course added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Courses::findOrFail($id);
        $programs = Programs::findOrFail($id);
        return view('admin.components.courses.show', compact('courses', 'programs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Courses::findOrFail($id);
        $programs = Programs::all();
        $semesters = Semester::all();
        return view('admin.components.courses.edit', compact('courses', 'programs', 'semesters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Courses::findOrFail($id);
        $courses -> name = $request -> input('name');
        $courses -> code = $request -> input('code');
        $courses -> credit_hour = $request -> input('credit_hour');
        $courses -> program_id = $request -> input('program_id');
        $courses -> semester_id = $request -> input('semester_id');
        $courses -> save();

        return redirect() -> route('courses') -> with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Courses::findOrFail($id);
        $courses -> delete();

        return redirect() -> route('courses') -> with('danger', 'Course deleted successfully');
    }
}
