<?php
/***********************************************************************************
* @Execution : default node : cmd> 2dAnagram.php
* 
* 
* @Purpose : perform operations by using users for checking anagam or not
* 
* @description :the Prime Number Program and store only the numbers in that range that are
* Anagrams
* 
* @overview : Anagarm checker
* @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
* @version : 1.0
* @since : 14-aug-2019
*
***********************************************************************************/


require("Utility.php");
function getprime($range)
{
    //array to store prime no
    $prime = [];
    //variacle to set index
    $count = 0;
    for ($i = 2; $i < $range; $i++) 
    {
        if (Utility::isprime($i))
        {
            $prime[$count++] = $i;
        }
    }
    return $prime;
}
/**
 * function to get the index to store number in specified place
 */
function getIndex($numb)
{
    $num = $numb;
    if ($num < 100) 
    {
        return 0;
    }
    while ($num > 9) 
    {
        $num = floor($num / 10);
    }
    return $num;
}
/**
 * Function to run and test the other functions in the file
 */
function primeRun()
{
    $primeArr = getPrime(1000);
    $anagram = [];
    $nonAnagram = [];
    for ($i = 0; $i < count($primeArr); $i++) 
    {
        for ($j = 0; $j < count($primeArr); $j++) 
        {
            if ($i != $j) 
            {
                if ($b = Utility::isAnagram($primeArr[$i], $primeArr[$j])) 
                {
                    array_push($anagram, $primeArr[$i]);
                    break;
                }
            }
        }
        if (!$b) 
        {
            array_push($nonAnagram, $primeArr[$i]);
        }
    }
    //@d array to store the values 
    $array2d = [];
    //pushing two arrays in the 2d arrays
    array_push($array2d, $anagram);
    array_push($array2d, $nonAnagram);
    echo "2D array stored is : ";
    print2d($array2d);
    echo "\n";
}
function print2d($arr)
{
    for ($i = 0; $i < count($arr); $i++) 
    {
        if ($i == 1) 
        {
            echo "\n\nNon-Anagrams";
        } else 
        {
            echo "Anagrams ; \n";
        }
        echo "\n";
        for ($j = 0; $j < count($arr[$i]); $j++) 
        {
            echo $arr[$i][$j] . ",";
        }
    }
}
//calling the method
primeRun();
?>