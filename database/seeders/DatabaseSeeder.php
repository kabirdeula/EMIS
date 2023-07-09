<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProgramsTableSeeder::class,
            SemestersTableSeeder::class,
            CoursesTableSeeder::class,
            UsersTableSeeder::class,
            TeachersTableSeeder::class,
            StudentsTableSeeder::class,
            StudentCoursesTableSeeder::class,
            HolidaysTableSeeder::class,
            AttendanceTableSeeder::class,
            MarksTableSeeder::class,
            AttendanceStatusTableSeeder::class,
            PredictionTableSeeder::class,
        ]);
    }
}
