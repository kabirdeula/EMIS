<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Courses;
use App\Models\Programs;
use App\Models\Semester;
use App\Models\Teachers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
        ]);

        $programs = [
            [
                'name' => 'Bachelor of Business Management',
                'code' => 'BBM'
            ],

            [
                'name' => 'Bachelor of Computer Application',
                'code' => 'BCA'
            ],

            [
                'name' => 'Bachelor of Hotel Management',
                'code' => 'BHM'
            ],

            [
                'name' => 'Bachelor of Information Management',
                'code' => 'BIM'
            ],

            [
                'name' => 'Bachelor of Science in Computer Science & Information Technology',
                'code' => 'BSc.CSIT'
            ],
        ];

        $semesters = [
            [
                'name' => 'First',
                'code' => '1st'
            ],

            [
                'name' => 'Second',
                'code' => '2nd'
            ],

            [
                'name' => 'Third',
                'code' => '3rd'
            ],

            [
                'name' => 'Fourth',
                'code' => '4th'
            ],

            [
                'name' => 'Fifth',
                'code' => '5th'
            ],

            [
                'name' => 'Sixth',
                'code' => '6th'
            ],

            [
                'name' => 'Seventh',
                'code' => '7th'
            ],

            [
                'name' => 'Eight',
                'code' => '8th'
            ],

        ];

        $courses = [
            [
                'name' => 'English Composition',
                'code' => 'ENG 201',
                'credit_hour' => '3',
                'program_id' => 4,
                'semester_id' => 1
            ],

            [
                'name' => 'Mobile Programming',
                'code' => 'CACS 351',
                'credit_hour' => '3',
                'program_id' => 2,
                'semester_id' => 6,
            ],
        ];

        $teachers = [

            [
                'first_name' => 'Chhetra',
                'last_name' => 'Chhetri',
                'user_id' => 6,
                'program_id' => 2,
                'semester_id' => 6,
                'course_id' => 2,
            ],

            [
                'first_name' => 'Sumit',
                'last_name' => 'Ghising',
                'user_id' => 7,
                'program_id' => 2,
                'semester_id' => 6,
                'course_id' => 2,
            ],

        ];

        foreach($programs as $key => $program){
            Programs::create($program);
        }

        foreach($semesters as $key => $semester){
            Semester::create($semester);
        }

        foreach($courses as $key => $course){
            Courses::create($course);
        }

        foreach($teachers as $key => $teacher){
            Teachers::create($teacher);
        }


    }
}
