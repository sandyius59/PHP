<?php
/***********************************************************************************
 * @Execution : default node : cmd> 2dprime.php
 *
 *
 * @Purpose : perform operations by using users for find prime number
 *
 * @description :Numbers and find the Prime numbers in that range. Store
 * the prime numbers in a 2D Array
 *
 * @overview : prime number
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 14-aug-2019
 *
 ***********************************************************************************/

require '/home/admin1/sandy/PHP/DATA STRUCTURE/2D PRIME/2dprimeBL.php';
/**enter the number  */
echo "enter the number \n";
$num = utility::readInt();
/**
 * function to get prime number in array
 * */
$primeArr = utility::primeNumberArr($num);
$twoDPrime = array();
$range = 100;
$k = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 100; $j++) {
        /**travserse till reaches condition   */
        if ($k == sizeof($primeArr) || $primeArr[$k] > $range) {
            break;
        }
        $twoDPrime[$i][$j] = $primeArr[$k++];
    }
    /**increment by 100 for every loop */
    $range += 100;
}
print_r($twoDPrime);
/**printing twoDaary */
for ($i = 0; $i < sizeof($twoDPrime); $i++) {
    for ($j = 0; $j < sizeof($twoDPrime[$i]); $j++) {
        echo $twoDPrime[$i][$j] . " ";
    }
    echo "\n";
}
// print_r($twoDPrime);
