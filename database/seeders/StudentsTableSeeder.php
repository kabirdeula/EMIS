<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('type', 0)
            ->get();
        $programs = DB::table('programs')->pluck('id')->toArray();
        $semesters = DB::table('semesters')->pluck('id')->toArray();

        foreach ($users as $user) {
            $programId = Arr::random($programs);
            $semesterId = Arr::random($semesters);
            $phoneNumber = $this->generateRandomMobileNumber();
            $dateOfBirth = $this->generateRandomDateOfBirth();

            $courses = DB::table('programs AS p')
            ->select('c.id')
            ->join('courses AS c', function ($join) use ($programId, $semesterId) {
                $join->on('p.id', '=', 'c.program_id')
                    ->where('p.id', '=', $programId)
                    ->where('c.semester_id', '=', $semesterId);
            })
            ->pluck('id')
            ->toArray();

            Students::create([
                'user_id' => $user->id,
                'program_id' => $programId,
                'semester_id' => $semesterId,
                'phone_number' => $phoneNumber,
                'date_of_birth' => $dateOfBirth,
            ])->courses()->attach($courses);
        }
    }

    private function generateRandomMobileNumber()
    {
        $mobileNumber = '98';
        for ($i = 0; $i < 8; $i++) {
            $mobileNumber .= mt_rand(0, 9);
        }
        return $mobileNumber;
    }

    private function generateRandomDateOfBirth()
    {
        $startDate = strtotime('1995-01-01');
        $endDate = strtotime('2005-12-31');
        $randomTimestamp = mt_rand($startDate, $endDate);
        return date('Y-m-d', $randomTimestamp);
    }
}
