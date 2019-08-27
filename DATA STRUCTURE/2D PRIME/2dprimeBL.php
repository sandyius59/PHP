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

    public static function primeNumberArr($n)
    {
        $prime = 2;
        $primeArr = array();
        $count = 0;
        while ($prime < $n) {
            $flag = true;
            for ($i = 2; $i <= $prime / 2; $i++) {
                if ($prime % $i == 0) {
                    $flag = false;
                    break;
                }
            }
            if ($flag == true) {
                $primeArr[$count] = $prime;
                $count++;
            }
            $prime++;
        }
        return $primeArr;
    }
}
