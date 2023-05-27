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

        foreach ($students as $student) {
            $attendanceData = [];
            // $holidays = Holidays::pluck('start_date', 'end_date')->toArray();
            $holidays = Holidays::all();

            for ($i = 1; $i <= 30; $i++) {
                $date = now()->subDays($i);

                // Skip Holidays
                foreach ($holidays as $holiday) {
                    $start_date = Carbon::parse($holiday -> start_date);
                    $end_date = Carbon::parse($holiday -> end_date);

                    if ($date->between($start_date, $end_date)) {
                        continue 2; // Skip this date and move to the next iteration of the outer loop
                    }
                }

                // Skip Saturdays
                if ($date->dayOfWeek === 6) {
                    continue;
                }

                $status = ['present', 'absent', 'late'][array_rand(['present', 'absent', 'late'])];
                $attendanceData[] = [
                    'student_id' => $student -> id,
                    'date' => $date -> toDateString(),
                    'status' => $status,
                ];
            }

            Attendance::insert($attendanceData);
        }
    }
}
