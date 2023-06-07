<?php

namespace App\Utils;

use App\Models\Attendance;
use App\Models\AttendanceStatus;
use App\Models\Marks;
use App\Utils\NaiveBayes;
// use Illuminate\Support\Facades\DB;

class BayesianClassifier
{

    protected $classProbabilities;
    protected $featureProbabilities;

    public function train($trainingData, $trainingLabels){

        $this->classProbabilities = [];
        $this->featureProbabilities = [];

        $classCounts = [];
        $featureCounts = [];

        $totalSamples = count($trainingData);

        foreach($trainingData as $i => $sample){
            $label = $trainingLabels[$i];

            if (!isset($classCounts[$label])) {
                $classCounts[$label] = 0;
            }
            $classCounts[$label]++;

            foreach ($sample as $feature => $value) {
                if (!isset($featureCounts[$feature][$label])) {
                    $featureCounts[$feature][$label] = [];
                }

                if (!isset($featureCounts[$feature][$label][$value])) {
                    $featureCounts[$feature][$label][$value] = 0;
                }

                $featureCounts[$feature][$label][$value]++;
            }
        }

        // Calculate class probabilities
        foreach($classCounts as $class => $count){
            $this->classProbabilities[$class] = $count / $totalSamples;
        }

        // Calculate feature probabilities
        foreach ($featureCounts as $feature => $classCounts) {
            foreach ($classCounts as $class => $valueCounts) {
                $totalFeatureCount = array_sum($valueCounts);

                foreach ($valueCounts as $value => $count) {
                    if (!isset($this->featureProbabilities[$feature][$class])) {
                        $this->featureProbabilities[$feature][$class] = [];
                    }

                    $this->featureProbabilities[$feature][$class][$value] = $count / $totalFeatureCount;
                }
            }
        }
    }

    public function predict($testingData)
    {
        $predictions = [];

        foreach ($testingData as $sample) {
            $bestClass = null;
            $bestScore = null;

            foreach ($this->classProbabilities as $class => $classProbability) {
                $score = $classProbability;

                foreach ($sample as $feature => $value) {
                    if (isset($this->featureProbabilities[$feature][$class][$value])) {
                        $score *= $this->featureProbabilities[$feature][$class][$value];
                    }
                }

                if ($bestClass === null || $score > $bestScore) {
                    $bestClass = $class;
                    $bestScore = $score;
                }
            }

            $predictions[] = $bestClass;
        }

        return $predictions;
    }
    // protected $classifier;
    // public function __construct()
    // {
    //     $this->classifier = new NaiveBayes();
    // }

    // public function preprocessData($data)
    // {
    //     // Implement your data preprocessing logic here
    //     // This method should clean and transform the data into a suitable format
    //     // You can handle missing values, normalize features, etc.
    //     $preprocessedData = [];

    //     foreach ($data as $item) {
    //         if (is_array($item) && isset($item['marks'])) {
    //             // Clean and transform the data.
    //             $preprocessedItem = [
    //                 'percentage' => $this->preprocessMarks($item['marks']),
    //                 'attendance' => $this->preprocessAttendance($item['attendance']),
    //                 // Add more features and preprocess them accordingly
    //             ];

    //             $preprocessedData[] = $preprocessedItem;
    //         } elseif (is_object($item) && isset($item->marks)) {
    //             // Clean and transform the data.
    //             $preprocessedItem = [
    //                 'percentage' => $this->preprocessMarks($item->marks),
    //                 'attendance' => $this->preprocessAttendance($item->attendance),
    //                 // Add more features and preprocess them accordingly
    //             ];

    //             $preprocessedData[] = $preprocessedItem;
    //         }
    //     }
    //     return $preprocessedData;
    // }

    // private function preprocessMarks($marks)
    // {
    //     // Clean and transform the marks value
    //     // Example: Convert string grades to numerical values
    //     $percentage = ($marks / 100) * 100;

    //     return $percentage;
    // }

    // private function preprocessAttendance($attendance)
    // {
    //     // Clean and transform the attendance value
    //     // Example: Normalize the attendance percentage to a value between 0 and 1.
    //     $normalizedAttendance = $attendance / 100;

    //     return $normalizedAttendance;
    // }

    // public function train()
    // {
        // \Illuminate\Support\Facades\DB::connection();
        // Get the training data from the Attendance and Marks models
        // $attendanceData = AttendanceStatus::all()->pluck('percentage')->toArray();
        // $attendanceData = AttendanceStatus::pluck('percentage')->toArray();
        // dd($attendanceData);
        // $attendanceData = Attendance::all();
        // $marksData = Marks::all()->pluck('marks')->toArray();
        // $marksData = Marks::pluck('marks')->toArray();
        // dd($marksData);

        // Combine the attendance and marks data into a single dataset
        // $trainingData = [];
        // $trainingLabels = [];

        // foreach ($attendanceData as $i => $attendance) {

            // if ($i > 0) {
                // $trainingData[] = [
                    // 'marks' => $marksData[$i],
                    // 'attendance' => $attendance,
                // ];

                // Assign labels to the training data (e.g. pass or fail)
                // Modify this according to your classification requirements
                // $test = ($attendance >= 30 && $marksData[$i] >= 60) ? 'pass' : 'fail';
                // dd($test);
                // $trainingLabels[] = ($attendance >= 30 && $marksData[$i] >= 60) ? 'pass' : 'fail';
                // dd($trainingLabels);
            // }
        // }

        // Preprocess the training data
        // $preprocessedData = $this->preprocessData($trainingData);

        // Train the classifier
        // $this->classifier->train($preprocessedData, $trainingLabels);
    // }

    // public function predict($data)
    // {

        // $passThreshold = 0.5;

        // $bestClass = null;
        // $bestScore = null;

        // foreach ($this->class as $key => $value) {
            # code...
        // }
        // $predictions = [];

        // foreach ($data as $sample) {
            // $prediction = $this->classifier->predict($sample);
            // $predictions[] = $prediction;
            // dd($prediction);
        // }


        // return $predictions;
    // }
}
