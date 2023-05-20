<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('type', 0)
            -> get();

        foreach ($users as $user) {
            Students::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
