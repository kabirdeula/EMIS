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
            HolidaysTableSeeder::class,
            AttendanceTableSeeder::class,
        ]);
    }
}
