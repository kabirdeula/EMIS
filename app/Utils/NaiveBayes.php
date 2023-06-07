<?php

namespace App\Utils;

class NaiveBayes
{

    protected $classProbabilities;
    protected $featureProbabilities;

    public function train($data, $labels)
    {
        $this->classProbabilities = [];
        $this->featureProbabilities = [];

        $classCounts = [];
        $featureCounts = [];

        $totalSamples = count($data);

        foreach ($data as $i => $sample) {
            $label = $labels[$i];

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
        foreach ($classCounts as $class => $count) {
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

    public function predict($sample)
    {
        $bestClass = null;
        $bestScore = null;

        foreach ($this->classProbabilities as $class => $classProbability) {
            $score = $classProbability;

            foreach ($sample as $feature => $value) {
                if (isset($this->featureProbabilities[$feature][$class][$value])) {
                    $score *= $this->featureProbabilities[$feature][$class][$value];
                }
            }

            if($bestClass === null || $score > $bestScore){
                $bestClass = $class;
                $bestScore = $score;
            }
        }

        return $bestClass;
    }
}
