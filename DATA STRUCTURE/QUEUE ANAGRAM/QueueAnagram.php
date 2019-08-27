<?php
/***********************************************************************************
 * @Execution : default node : cmd> QueueAnagram.php
 *
 *
 * @Purpose : perform operations by using users for checking anagam or not
 *
 * @description :the Prime Number Program and store only the numbers in that range that are
 * Anagrams using queue
 *
 * @overview : Anagarm checker
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 17-aug-2019
 *
 ***********************************************************************************/
require "/home/admin1/sandy/PHP/DATA STRUCTURE/queue.php";
require "/home/admin1/sandy/PHP/DATA S/BANK/Queue.php";

function Queue()
{
    $que = new Queue();
    $arr = getprime(1000);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i != $j) {
                if (Utility::isAnagram($arr[$i], $arr[$j])) {
                    $que = enqueue($arr[$i]);
                    break;
                }
            }
        }
    }
    echo "Anagarm in queue is : \n\n";
    echo $que . "\n\n";

    function getprime($range)
    {
        $prime = [];
        $count = 0;
        for ($i = 2; $i < $range; $i++) {
            if (utility::isprime($i)) {
                $prime[$count++] = $i;
            }

        }
        return $prime;
    }
}
Queue();
