<?php

namespace Database\Seeders;

use App\Models\Programs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        foreach($programs as $key => $program){
            Programs::create($program);
        }

    }
}
