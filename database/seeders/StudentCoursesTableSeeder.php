<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve all students and courses
        $students = Students::all();
        $courses = Courses::all();

        // Loop through each student and assign courses
        foreach ($students as $student) {
            // Get a random subset of courses for the student
            $selectedCourses = $courses->random(5);

            // Attach the courses to the student
            $student->courses()->attach($selectedCourses);
        }
    }
}
