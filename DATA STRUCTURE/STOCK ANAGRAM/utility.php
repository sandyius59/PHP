<?php
class Utility
{
    public static function getInt()
    {
        fscanf(STDIN, "%d\n", $val);
        while (!is_numeric($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, "%d\n", $val);
        }
        return $val;
    }

    public static function isPrime($n)
    {
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    public static function isAnagram($s1, $s2)
    {
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
    }

}
