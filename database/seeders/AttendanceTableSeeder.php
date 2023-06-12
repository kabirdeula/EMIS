<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Holidays;
use App\Models\Students;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Students::all();

        // Specify the time range (e.g., May 2023)
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        foreach ($students as $student) {
            $attendanceData = [];
            // $holidays = Holidays::pluck('start_date', 'end_date')->toArray();
            $holidays = Holidays::all();

            // Fetch attendance records for the specified time range
            $attendance = Attendance::where('student_id', $student->id)
                ->whereBetween('date', [$startOfYear, $endOfYear])
                ->get();

            for ($i = 1; $i <= $startOfYear->diffInDays($endOfYear); $i++) {
                $date = $startOfYear->copy()->addDays($i);

                // Skip Holidays
                foreach ($holidays as $holiday) {
                    $start_date = Carbon::parse($holiday->start_date);
                    $end_date = Carbon::parse($holiday->end_date);

                    if ($date->between($start_date, $end_date)) {
                        continue 2; // Skip this date and move to the next iteration of the outer loop
                    }
                }

                // Skip Saturdays
                if ($date->dayOfWeek === 6) {
                    continue;
                }

                // Calculate attendance statistics
                $total_days = $startOfYear->diffInDays($endOfYear) + 1;
                $total_study_days = $total_days - $this->getTotalHolidaysCount($holidays);
                $present_days = $attendance->where('date', $date->toDateString())
                    ->whereIn('status', ['present', 'late'])
                    ->count();
                $absent_days = $total_study_days - $present_days;
                $percentage = ($present_days / $total_study_days) * 100;
                $percentage = number_format($percentage, 2);


                $status = ['present', 'absent', 'late'][array_rand(['present', 'absent', 'late'])];
                $attendanceData[] = [
                    'student_id' => $student->id,
                    'date' => $date->toDateString(),
                    'status' => $status,
                ];
            }

            Attendance::insert($attendanceData);
        }
    }

    protected function getTotalHolidaysCount($holidays)
    {
        $count = 0;
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        foreach ($holidays as $holiday) {
            $start_date = Carbon::parse($holiday->start_date);
            $end_date = Carbon::parse($holiday->end_date);

            if ($start_date->between($startOfYear, $endOfYear) || $end_date->between($startOfYear, $endOfYear)) {
                $count += $startOfYear -> diffInDays($endOfYear) + 1;
            }
        }
        return $count;
    }
}
