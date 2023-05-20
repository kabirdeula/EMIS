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
            ProgramsTableSeeder::class,
            SemestersTableSeeder::class,
            CoursesTableSeeder::class,
            UsersTableSeeder::class,
            TeachersTableSeeder::class,
            StudentsTableSeeder::class,
        ]);
    }
}
