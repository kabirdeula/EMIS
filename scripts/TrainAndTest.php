<?php

namespace App\Scripts;

require __DIR__.'/../vendor/autoload.php';

use App\Utils\BayesianClassifier;

// Create an instance of the BayesianClassifier
$classifier = new BayesianClassifier();

// Train the classifier
// $classifier->train();

$trainingData = [
    // Training data array
    [
        ['marks' => 80, 'attendance' => 90],
        ['marks' => 70, 'attendance' => 85],
        ['marks' => 60, 'attendance' => 80],
        ['marks' => 50, 'attendance' => 75],
        ['marks' => 40, 'attendance' => 70],
        ['marks' => 30, 'attendance' => 65],
        ['marks' <= 20, 'attendance' => 30],
    ]
];

$trainingLabels = [
    // Training labels array
    [
        'excellent',
        'best',
        'vey good',
        'good',
        'average',
        'fair',
        'bad',
    ]
];

// Train the classifier
$classifier->train($trainingData, $trainingLabels);

// Assuming $testingData contains your testing dataset
$testingData = [
    // Training data array
    [
        ['marks' => 85, 'attendance' => 92],
        ['marks' => 75, 'attendance' => 88],
        ['marks' => 65, 'attendance' => 82],
        ['marks' => 55, 'attendance' => 78],
        ['marks' => 45, 'attendance' => 72],
        ['marks' => 35, 'attendance' => 68],
        ['marks' <= 25, 'attendance' => 32],
    ]
];

// Make predictions using the trained classifier
$predictions = $classifier->predict($trainingData);

foreach ($predictions as $prediction ) {
    echo $prediction . "\n";
}
