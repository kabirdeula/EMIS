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
                'name' => "Bachelor's of Business Management",
                'code' => 'BBM'
            ],

            [
                'name' => "Bachelor's of Computer Application",
                'code' => 'BCA'
            ],

            [
                'name' => "Bachelor's of Hotel Management",
                'code' => 'BHM'
            ],

            [
                'name' => "Bachelor's of Information Management",
                'code' => 'BIM'
            ],

            [
                'name' => "Bachelor's of Science in Computer Science & Information Technology",
                'code' => 'BSc.CSIT'
            ],
        ];

        foreach($programs as $key => $program){
            Programs::create($program);
        }

    }
}
