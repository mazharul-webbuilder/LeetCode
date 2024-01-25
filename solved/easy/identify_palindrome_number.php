<?php

class IdentifyPalindromeNumber
{
    public function isPalindromeNumber($number): bool
    {
        /*Shortcut solution*/
//        return $number === strrev($number);
//        ==========
        if ($number < 0) {
            return false;
        }
        $originalNumber = $number;
        $reverseNumber = 0;

        while ($number > 0) {
            $digit = $number % 10;
            $reverseNumber = $reverseNumber * 10 + $digit;
            $number = (int) ($number / 10);
        }
        return $originalNumber === $reverseNumber;
    }
}

$palindrome = new IdentifyPalindromeNumber();
echo $palindrome->isPalindromeNumber(121);