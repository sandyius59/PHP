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
//$str store all data in str
$str = "Hello <<name>>, We have your full
name as <<full name>> in our system. your contact number is 91-xxxxxxxxxx.
Please,let us know in case of any clarification
Thank you BridgeLabz xx/xx/xxxx.";
//take a first name from user
echo "enter first name :";
$fname = trim(fgets(STDIN));
//take a last name form user
echo "enter last name :";
$lname = trim(fgets(STDIN));
//take a moblie no from usere
echo "enter mobile no :";
$number = trim(fgets(STDIN));
while (strlen($number) != 10) {
    echo "enter valid mobile number :\n";
    $number = trim(fgets(STDIN));
}
//take data form user
echo "enter data like xx/xx/xxxx  :\n";
$date = trim(fgets(STDIN));
//preg_replace is useing for replace value in reguler expration
$str = preg_replace("/\d{2}-x+/", $number, $str) . "\n";

$str = preg_replace("/<+\w+>+/", $fname, $str . "\n");

$str = preg_replace("/<+\w+\s\w+>+/", $fname . "  " . $lname, $str) . "\n";

$str = preg_replace("/x+\/x+\/x+/", $date, $str);

echo $str . "\n";
