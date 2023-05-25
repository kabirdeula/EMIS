<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Students;
use Illuminate\Http\Request;

class AttendanceRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::all();
        $students = Students::all();
        return view('admin.components.attendances.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Students::all();
        return view('admin.components.attendances.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $attendances = new Attendance();
        $attendances -> student_id = $request -> input('student_id');
        $attendances -> date = $request -> input('date');
        $attendances -> status = $request -> input('status');
        $attendances -> save();

        return redirect() -> route('attendances') -> with('success', 'Attendance added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendances = Attendance::findOrFail($id);
        return view('admin.components.attendances.show', compact('attendances'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attendances = Attendance::findOrFail($id);
        $students = Students::findOrFail($id);
        return view('admin.components.attendances.edit', compact('attendances', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attendances = Attendance::findOrFail($id);
        $attendances -> student_id = $request -> input('student_id');
        $attendances -> date = $request -> input('date');
        $attendances -> status = $request -> input('status');
        $attendances -> save();

        return redirect() -> route('attendances') -> with('success', 'Attendance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attendances = Attendance::findOrFail($id);
        $attendances -> delete();

        return redirect() -> route('attendances') -> with('success', 'Attendance deleted successfully');
    }
}
