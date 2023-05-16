<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        foreach($semesters as $key => $semester){
            Semester::create($semester);
        }


    }
}
