<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Marks;
use App\Models\Students;
use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Students::all();

        $courses = Courses::all();

        foreach ($students as $student) {
            foreach ($courses as $course) {
                $marks = rand(30, 100);

                Marks::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'marks' => $marks,
                ]);
            }
        }
    }
}
