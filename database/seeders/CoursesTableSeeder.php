<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [

            [
                'name' => 'Financial Accounting',
                'code' => 'ACC 201',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 2
            ],

            [
                'name' => 'Computer Based Financial Accounting',
                'code' => 'ACC 211',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 3
            ],

            [
                'name' => 'Accounting for Decision Making',
                'code' => 'ACC 313',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 4
            ],

            [
                'name' => 'Mobile Programming',
                'code' => 'CACS 351',
                'credit_hour' => '3',
                'program_id' => 2,
                'semester_id' => 6,
            ],

            [
                'name' => 'Introductory Microeconomics',
                'code' => 'ECO 211',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 1
            ],

            [
                'name' => 'Introductory Macroeconomics',
                'code' => 'ECO 212',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 2
            ],

            [
                'name' => 'English Composition',
                'code' => 'ENG 201',
                'credit_hour' => '3',
                'program_id' => 4,
                'semester_id' => 1
            ],

            [
                'name' => 'English I',
                'code' => 'ENG 211',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 1
            ],

            [
                'name' => 'English II',
                'code' => 'ENG 212',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 2
            ],

            [
                'name' => 'Business Communications',
                'code' => 'ENG 213',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 3
            ],

            [
                'name' => 'Basic Finance',
                'code' => 'FIN 211',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 3
            ],

            [
                'name' => 'Financial Management',
                'code' => 'FIN 213',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 4
            ],

            [
                'name' => 'Principles of Management',
                'code' => 'MGT 201',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 1
            ],

            [
                'name' => 'Human Resource Management',
                'code' => 'MGT 313',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 4
            ],

            [
                'name' => 'Taxation in Nepal',
                'code' => 'MGT 314',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 4
            ],

            [
                'name' => 'Business Mathematics I',
                'code' => 'MTH 211',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 1
            ],

            [
                'name' => 'Business Mathematics II',
                'code' => 'MTH 212',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 2
            ],

            [
                'name' => 'Business Research Methods',
                'code' => 'RCH 311',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 4
            ],

            [
                'name' => 'Sociology for Business',
                'code' => 'SOC 201',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 1
            ],

            [
                'name' => 'Nepalese Society and Politics',
                'code' => 'SOC 202',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 3
            ],

            [
                'name' => 'Business Statistics',
                'code' => 'STT 211',
                'credit_hour' => '3',
                'program_id' => 1,
                'semester_id' => 3
            ],















        ];

        foreach($courses as $key => $course){
            Courses::create($course);
        }
    }
}
