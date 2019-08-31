<?php

class Utility
{
    /**
     * @desc to check is prime number or not
     * @param $n its passing a number
     * @return true its return a true values
     */
    public static function isPrime($n)
    {
        try {
            for ($i = 2; $i <= $n / 2; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        } catch (Exception $e) {
            echo $e;
        }
    }
/**
 * @desc to check a Anagram or not
 * @param $s1 its passing a first value
 * @param $s2 its passing a second value
 * @return true or false its return a true or false values
 */

    public static function isAnagram($s1, $s2)
    {
        try {
            $arr1 = str_split($s1, 1);
            $arr2 = str_split($s2, 1);
            if (count($arr1) != count($arr2)) {
                return false;
            }
            for ($i = 0; $i < count($arr1); $i++) {
                if (array_search($arr1[$i], $arr2) !== false) {
                    $key = array_search($arr1[$i], $arr2);
                    unset($arr2[$key]);
                }

            }
            if (count($arr2) == 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}
