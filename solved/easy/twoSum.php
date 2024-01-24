<?php

class TwoSumImplement {


    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) : array
    {
        $indexPositions = [];
        for ($index=0; $index < count($nums); $index++){
            $currentNumber = $nums[$index]; // get current element to compare
            for ($index2=$index+1; $index2 < count($nums); $index2++){
                if ($currentNumber + $nums[$index2] == $target){
                    $indexPositions[] = $index;
                    $indexPositions[] = $index2;
                    return $indexPositions;
                }
            }
        }
        return [];
    }
}

$twoSum = new TwoSumImplement();
var_dump($twoSum->twoSum([2,7,11,15],26));