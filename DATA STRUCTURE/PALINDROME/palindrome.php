<?php
/**********************************************************************
 * @Execution : default node : cmd> palindrome.php
 *
 *
 * @Purpose : to check palindrome or not
 *
 * @description :A palindrome is a string that reads the same forward and backward, for
 * example, radar, toot, and madam. We would like to construct an algorithm to
 * input a string of characters and check whether it is a palindrome.
 *
 * @overview : Palindrome
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 17-Aug-2019
 *
 ***********************************************************************/

require '/home/admin1/sandy/PHP/DATA STRUCTURE/PALINDROME/utility.php';
require '/home/admin1/sandy/PHP/DATA STRUCTURE/deqeu.php';
/** create new deque */
$dequeu = new Deque;
/**enter the string to check whether it is a palindrome */
echo "enter the string \n";
$str = Utility::readString();
trim($str);
/** split the string to array */
$str1 = str_split($str);
print_r($str1);
/** add array to deque at the end */
for ($i = 0; $i < sizeof($str1); $i++) {
    $dequeu->addRear($str1[$i]);
}
$dequeu->displayForward();
echo "\n";
$string = "";
/** store it in string after removing at end */
for ($i = 0; $i < sizeof($str1); $i++) {
    $string = $string . $dequeu->removeRear();
}
echo $string . "\n";
/** if both string are equal then palidrome */
if ($str == $string) {
    echo "true";
} else {
    echo "false";
}
