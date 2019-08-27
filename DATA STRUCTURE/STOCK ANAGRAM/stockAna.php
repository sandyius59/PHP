<?php
/***********************************************************************************
 * @Execution : default node : cmd> stockAna.php
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
 * @since : 17-aug-2019
 *
 ***********************************************************************************/

require '/home/admin1/sandy/PHP/DATA STRUCTURE/STOCK ANAGRAM/utility.php';
require '/home/admin1/sandy/PHP/DATA STRUCTURE/queue.php';
echo "enter the number \n";
/**read number */
$n = Utility::getInt();
/**function to get prime number in arrays */
$primeArr = Utility::isPrime($n);
/** function to get primes that are anagram */
for ($i = 0; $i < $primeArr; $i++) {
    for ($j = $i + 1; $j < $primeArr; $j++) {
        Utility::isAnagram($primeArr[$i], $primeArr[$j]);

    }
}

/**create new stack */
$stack = new Stack();
$stack1 = new Stack();
/**push prime anagram array in stack */
for ($i = 0; $i < count($primeAna); $i++) {
    $stack->push($primeAna[$i]);
}
/**push element into stack that is popped   */
for ($i = 0; $i < sizeof($primeAna); $i++) {
    $stack1->push($stack->pop());
}
echo "stack prime anangrams\n";
$stack1->display();
