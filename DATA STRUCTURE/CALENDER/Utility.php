<?php
class Utility
{
    /**
     * @desc to calculete dayofwek
     * @param $d its passing a day
     * @param $m its passing a month
     * @return $d0 its return a calculted values
     */
    public static function dayOfWeek($d, $m, $y)
    {
        $y0 = floor($y - (14 - $m) / 12);
        $x = floor($y0 + floor($y0 / 4) - floor($y0 / 100) + floor($y0 / 400));
        $m0 = $m + 12 * floor((14 - $m) / 12) - 2;
        $d0 = ($d + $x + floor((31 * $m0) / 12)) % 7;
        return $d0;
    }
    /**
     * @desc to calculete dayofwek
     * @param $year its passing a year value
     * @return
     */

    public static function isLeapYear($year)
    {
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }

}
