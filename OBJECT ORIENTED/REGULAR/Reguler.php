<?php
/**********************************************************************
 * @Execution : default node : cmd> Regular.php
 *
 *
 * @Purpose : to manage replecement
 *
 * @description :Use Regex to replace name, full name, Mobile#, and Date with proper value.
 *
 * @overview : Reguler Exprestion
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 22-Aug-2019
 *
 ***********************************************************************/
$str = "Hello <<name>>, We have your full
name as <<full name>> in our system. your contact number is 914-xxxxxxxxxx.
Please,let us know in case of any clarification
Thank you BridgeLabz xx/xx/xxxx.";

echo "enter first name :";
$fname = trim(fgets(STDIN));

echo "enter last name :";
$lname = trim(fgets(STDIN));

echo "enter mobile no :";
$number = trim(fgets(STDIN));
while (strlen($number) != 10) {
    echo "enter valid mobile number :\n";
    $number = trim(fgets(STDIN));
}

echo "enter data like xx/xx/xxxx  :\n";
$date = trim(fgets(STDIN));

$str = preg_replace("/\d{3}-x+/", $number, $str) . "\n";

$str = preg_replace("/<+\w+>+/", $fname, $str . "\n");

$str = preg_replace("/<+\w+\s\w+>+/", $fname . "  " . $lname, $str) . "\n";

$str = preg_replace("/x+\/x+\/x+/", $date, $str);

echo $str . "\n";
