<?php

class RomanToInteger
{
    /**
     * @param String $s
     * @return Integer
    */
    public function romanToInt(string $s): int
    {
        $romanWithDec = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        for ($i=0, $num=0; ($i< strlen($s)); $i++) {
            $current = $romanWithDec[$s[$i]];
            $next = $i == strlen($s) - 1 ? 0 : $romanWithDec[$s[$i+1]];
            if ($current >= $next) {
                $num += $current;
            } else{
                $num -= $current;
            }
        }
        return $num;
    }
}

$romanToInt = new RomanToInteger();
echo $romanToInt->romanToInt('MCMXCIV');