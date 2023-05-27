<?php

namespace Database\Seeders;

use App\Models\Holidays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $holidays = [

            [
                'name' => 'Nepali New Year',
                'start_date' => '2023-04-14',
                'end_date' => '2023-04-14',
            ],

            [
                'name' => 'International Labour Day',
                'start_date' => '2023-05-01',
                'end_date' => '2023-05-01',
            ],

            [
                'name' => 'Buddha Jayanti',
                'start_date' => '2023-05-04',
                'end_date' => '2023-05-04',
            ],

            [
                'name' => 'Bhoto Jatra',
                'start_date' => '2023-05-25',
                'end_date' => '2023-05-25',
            ],
        ];

        foreach ($holidays as $key => $holidays) {
            Holidays::create($holidays);
        }
    }
}
