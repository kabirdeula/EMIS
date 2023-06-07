<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Students;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        return view('admin.components.attendances.index', compact('students'));
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
        $attendances->student_id = $request->input('student_id');
        $attendances->date = $request->input('date');
        $attendances->status = $request->input('status');
        $attendances->save();

        return redirect()->route('attendances')->with('success', 'Attendance added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::findOrFail($id);

        // Specify the time range (e.g., May 2023)
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        // dd($startOfYear);
        // dd($endOfYear);
        // Fetch attendance records for the specified time range
        $attendance = Attendance::where('student_id', $student->id)
            ->whereBetween('date', [$startOfYear, $endOfYear])
            ->get();

        // dd($attendance);

        // Calculate attendance statistics
        $total_days = $startOfYear->diffInDays($endOfYear) + 1;
        $total_study_days = $total_days - 4;
        $present_days = $attendance ->where('status', 'present')->count();
        // dd($present_days);
        $absent_days = $attendance ->where('status', 'absent')->count();
        $late_days = $attendance ->where('status', 'late')->count();
        $attendance_percentage = (($present_days + $late_days) / $total_study_days) * 100;
        $attendance_percentage = number_format($attendance_percentage, 2);

        return view('admin.components.attendances.show', compact('student', 'total_days', 'present_days', 'absent_days', 'late_days', 'attendance_percentage'));
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
        $attendances->student_id = $request->input('student_id');
        $attendances->date = $request->input('date');
        $attendances->status = $request->input('status');
        $attendances->save();

        return redirect()->route('attendances')->with('success', 'Attendance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attendances = Attendance::findOrFail($id);
        $attendances->delete();

        return redirect()->route('attendances')->with('success', 'Attendance deleted successfully');
    }
}
