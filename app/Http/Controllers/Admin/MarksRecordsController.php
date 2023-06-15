<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Marks;
use App\Models\Students;
use Illuminate\Http\Request;

class MarksRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::paginate(5);

        return view('admin.components.marks.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Students::all();
        $courses = Courses::all();

        return view('admin.components.marks.create', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
            'marks' => 'required',
        ]);

        $marks = new Marks();
        $marks->student_id = $request->input('student_id');
        $marks->course_id = $request->input('course_id');
        $marks->marks = $request->input('marks');
        $marks->save();

        return redirect()->route('marks')->with('success', 'Marks added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::findOrFail($id);
        $marks = Marks::findOrFail($id);

        return view('admin.components.marks.show', compact('student', 'marks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Students::findOrFail($id);
        $marks = Marks::findOrFail($id);

        return view('admin.components.marks.edit', compact('students', 'marks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $marks = Marks::findOrFail($id);
        $marks->student_id = $request->input('student_id');
        $marks->course_id = $request->input('course_id');
        $marks->marks = $request->input('marks');
        $marks->save();

        return redirect()->route('marks')->with('success', 'Marks updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Students::findOrFail($id);
        $student->delete();

        return redirect()->route('marks')->with('danger', 'Marks deleted successfully');
    }
}
