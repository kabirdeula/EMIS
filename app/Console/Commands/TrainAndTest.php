<?php

namespace App\Console\Commands;

use App\Models\Students;
use App\Utils\BayesianClassifier;
use Illuminate\Console\Command;

class TrainAndTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'train:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Train and Test the model';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $classifier = new BayesianClassifier();

        // Train the classifier

        $students = Students::all();

        $studentCount = count($students);

        // Randomly shuffle the students array
        $shuffledStudents = $students->shuffle();

        // Calculate the count for training and testing data
        $trainingDataCount = (int) ($studentCount * 0.7);
        $testingDataCount = $studentCount - $trainingDataCount;

        // Split the shuffled students into training and testing data.
        $trainingStudents = $shuffledStudents->take($trainingDataCount);
        $testingStudents = $shuffledStudents->slice($trainingDataCount);

        $trainingData = collect([]);
        $testingData = collect([]);
        $trainingLabels = [];

        $trainingStudents->each(function ($student) use (&$trainingData) {
            $marks = $student->marks;
            $attendances = $student->attendanceStatus;

            foreach ($attendances as $attendance) {
                $percentage = $attendance->percentage;
                // dd($percentage);
            }

            foreach ($marks as $mark) {
                $markValue = $mark->marks;
                // dd($markValue);
            }

            $trainingData->push(['marks' => $markValue, 'attendance' => $percentage]);
        });

        $testingStudents->each(function ($student) use (&$testingData) {
            $marks = $student->marks;
            $attendances = $student->attendanceStatus;

            foreach ($attendances as $attendance) {
                $percentage = $attendance->percentage;
                // dd($percentage);
            }

            foreach ($marks as $mark) {
                $markValue = $mark->marks;
                // dd($markValue);
            }

            $testingData->push(['marks' => $markValue, 'attendance' => $percentage]);
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
        $predictions = $classifier->predict($testingData);

        $studentsCount = count($testingData);
        for ($i = 0; $i < $studentsCount; $i++) {
            $student = $testingData[$i];
            $prediction = $predictions[$i];

            echo "Student " . ($i + 1) . ": Prediction - " . $prediction . "\n";
        }

        $this->info('Training and testing completed successfully.');
    }
}

// $attendance = $students->attendanceStatus->percentage;
// $trainingData = [
// ['marks' => 80, 'attendance' => 90],
// ['marks' => 70, 'attendance' => 85],
// ['marks' => 60, 'attendance' => 80],
// ['marks' => 50, 'attendance' => 75],
// ['marks' => 40, 'attendance' => 70],
// ['marks' => 30, 'attendance' => 65],
// ['marks' >= 20, 'attendance' => 30],

// ['attendance' => 100, 'marks' => 100],
// ];
// $trainingLabels = [
//     'excellent',
//     'best',
//     'very good',
//     'good',
//     'average',
//     'fair',
//     'bad',
// ];
// Assuming $testingData contains your testing dataset

// foreach ($predictions as $prediction) {
//     echo $i . ' ' . $prediction . "\n";
//     $i++;
// }


        // $testingData = [
        //     ['marks' => 85, 'attendance' => 92],
        //     ['marks' => 75, 'attendance' => 88],
        //     ['marks' => 65, 'attendance' => 82],
        //     ['marks' => 55, 'attendance' => 78],
        //     ['marks' => 45, 'attendance' => 72],
        //     ['marks' => 35, 'attendance' => 68],
        //     ['marks' <= 25, 'attendance' => 32],
        // ];
