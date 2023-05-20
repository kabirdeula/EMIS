<?php

namespace Database\Seeders;

use App\Models\Teachers;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $teachers = [

        //     [
        //         'first_name' => 'Chhetra',
        //         'last_name' => 'Chhetri',
        //         'user_id' => 6,
        //         'program_id' => 2,
        //         'semester_id' => 6,
        //         'course_id' => 2,
        //     ],

        //     [
        //         'first_name' => 'Sumit',
        //         'last_name' => 'Ghising',
        //         'user_id' => 7,
        //         'program_id' => 2,
        //         'semester_id' => 6,
        //         'course_id' => 2,
        //     ],

        // ];

        // foreach($teachers as $key => $teacher){
        //     Teachers::create($teacher);
        // }
        $users = User::where('type', 2)
            -> get();

        foreach ($users as $user) {
            Teachers::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
