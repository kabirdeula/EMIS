<?php

namespace Database\Seeders;

use App\Models\Teachers;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::where('type', 2)
            ->get();
        $programs = DB::table('programs')
            ->pluck('id')
            ->toArray();
        $semesters = DB::table('semesters')
            ->pluck('id')
            ->toArray();


        foreach ($users as $user) {
            $programId = Arr::random($programs);
            $semesterId = Arr::random($semesters);

            Teachers::create([
                'user_id' => $user->id,
                'program_id' => $programId,
                'semester_id' => $semesterId,
            ]);
        }
    }
}
