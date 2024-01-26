<?php

class MaxFrequencyElements
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function numberOfMaxFrequency(array $nums): int
    {
        $numberOfMaxFrequency = [];
        for ($i=0; $i<count($nums); $i++) {
            if (!in_array($nums[$i], $numberOfMaxFrequency)){
                $numberOfMaxFrequency[] = $nums[$i];
            }
        }
       return count($numberOfMaxFrequency);
    }

}

$obj = new MaxFrequencyElements();
echo $obj->numberOfMaxFrequency([1,2,3,4,5]);
