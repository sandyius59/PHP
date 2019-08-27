<?php
class utility
{
    public static function readInt()
    {
        fscanf(STDIN, "%s", $i);
        /**if input is numeric or decimal  */
        while (!is_numeric($i) || $i > (int) $i) {
            echo "enter valid input";
            fscanf(STDIN, "%s", $i);
        }
        return $i;
    }

    public static function calculateDay($d, $m, $y)
    {
        $y0 = floor($y - (14 - $m) / 12) + 1;
        $x = floor($y0 + $y0 / 4 - $y0 / 100 + $y0 / 400);
        $m0 = ($m + 12 * floor(((14 - $m) / 12)) - 2);
        $d0 = floor(($d + $x + floor((31 * $m0) / 12)) % 7);
        return $d0;
    }

    public static function checkLeapYear($yr)
    {
        /**year must 4 digits */
        while ($yr < 999 && $yr < 10000) {
            echo "enter valid year must be 4 digit \n";
            $yr = Utility::readInt();
            Utility::checkLeapYear($yr);
        }
        $flag = false;
        if ($yr % 400 == 0) {
            $flag = true;
        } else if ($yr % 100 == 0) {
            $flag = false;
        } else if ($yr % 4 == 0) {
            $flag = true;
        }
        if ($flag) {
            return true;
        } else {
            return false;
        }
    }

}
