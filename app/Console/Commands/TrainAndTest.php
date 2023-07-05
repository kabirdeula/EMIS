<?php

namespace App\Console\Commands;

use App\Models\Students;
use Illuminate\Console\Command;
use App\Utils\BayesianClassifier;

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

        $studentsCount = count($trainingData);
        for ($i = 0; $i < $studentsCount; $i++) {
            $prediction = $predictions[$i];

            echo "Student " . ($i + 1) . ": Prediction - " . $prediction . "\n";
        }

        $this->info('Training completed successfully.');
    }
}
