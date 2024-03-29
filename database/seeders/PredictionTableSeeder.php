<?php

namespace Database\Seeders;

use App\Models\Prediction;
use App\Models\Students;
use App\Utils\BayesianClassifier;
use Illuminate\Database\Seeder;

class PredictionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classifier = new BayesianClassifier();

        // Train the classifier

        $students = Students::all();

        $studentCount = count($students);

        $trainingData = collect([]);
        $trainingLabels = [];

        $students->each(function ($student) use (&$trainingData) {
            $marks = $student->marks;
            $attendances = $student->attendanceStatus;

            foreach ($attendances as $attendance) {
                $percentage = $attendance->percentage;
            }

            foreach ($marks as $mark) {
                $markValue = $mark->marks;
            }

            $trainingData->push(['marks' => $markValue, 'attendance' => $percentage]);
        });

        foreach ($trainingData as $sample) {
            $marks = $sample['marks'];
            $attendance = $sample['attendance'];


            if ($marks >= 80 || $attendance >= 90) {
                $label = 'excellent';
            } elseif ($marks >= 70 || $attendance >= 80) {
                $label = 'best';
            } elseif ($marks >= 60 || $attendance >= 70) {
                $label = 'very good';
            } elseif ($marks >= 50 || $attendance >= 60) {
                $label = 'good';
            } elseif ($marks >= 40 || $attendance >= 50) {
                $label = 'average';
            } elseif ($marks >= 30 || $attendance >= 40) {
                $label = 'fair';
            } else {
                $label = 'bad';
            }

            $trainingLabels[] = $label;
        }

        $classifier->train($trainingData, $trainingLabels);

        // Make predictions using the trained classifier
        $predictions = $classifier->predict($trainingData);

        $results = [];

        foreach ($students as $i => $student) {
            $prediction = $predictions[$i];

            $results[] = [
                'id' => $student->id,
                'student' => $student->user->name,
                'prediction' => $prediction,
            ];

            Prediction::create([
                'student_id' => $student->id,
                'name' => $student->user->name,
                'prediction' => $prediction,
            ]);
        }
    }
}
