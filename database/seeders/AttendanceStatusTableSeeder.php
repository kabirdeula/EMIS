<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\AttendanceStatus;
use App\Models\Students;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $students = Attendance::all();
        $students = Students::all();

        // Specify the time range (e.g., May 2023)
        $startOfMonth = Carbon::create(2023, 5, 1)->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        foreach ($students as $student) {

            // Fetch attendance records for the specified time range
            $attendance = Attendance::where('student_id', $student->id)
                ->whereBetween('date', [$startOfMonth, $endOfMonth])
                ->get();

            // dd($attendance);

            // for ($i = 1; $i <= 30; $i++) {

                $total_days = $startOfMonth->diffInDays($endOfMonth) + 1;
                // $total_study_days = $total_days - 4;
                $present_days = $attendance->where('status', 'present')->count();
                $late_days = $attendance->where('status', 'late')->count();
                $percentage = (($present_days + $late_days) / $total_days) * 100;
                $percentage = number_format($percentage, 2);

                // dd($percentage);
            // }
            AttendanceStatus::create([
                'student_id' => $student->id,
                'percentage' => $percentage,
            ]);
        }
    }
}
