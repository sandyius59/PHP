<?php
/***********************************************************************************
 * @Execution : default node : cmd> stackCal.php
 *
 *
 * @Purpose : perform operations by using user input find calender
 *
 * @description :Store the Calendar in stack,
 * the first dimension the week of the month and the second dimension stores the day
 * of the week.
 *
 * @overview : Calender finder
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 16-aug-2019
 *
 ***********************************************************************************/
require '/home/admin1/sandy/PHP/DATA STRUCTURE/stack.php';
require '/home/admin1/sandy/PHP/DATA STRUCTURE/STACK CALENDER/stackCalBL.php';
$stack = new Stack();
$stackNew = new Stack();
// $queueWeek = new Queue();
echo "enter month\n";
$m = Utility::readInt();
echo "enter year\n";
$y = Utility::readInt();
// $queueWeek = Utility::queWeek();
$week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$months = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
$d0 = Utility::calculateDay(1, $m, $y);
if (($m <= 12 && $m >= 1) && ($y >= 1000 && $y <= 9999)) {
    /**if it is leapyear then update array with feb 29 */
    if (Utility::checkLeapYear($y)) {
        $months[1] = 29;
    }
    /**push dates into stack */
    for ($j = 1; $j <= $months[$m - 1]; $j++) {
        $stack->push($j);
    }
    /**pop elements from stack and push into stacknew */
    for ($k = 0; $k < $stack->size(); $k++) {
        $stackNew->push($stack->pop());
    }
    /**display week names */
    for ($k = 0; $k < sizeof($week); $k++) {
        echo $week[$k] . "\t";
    }
    echo "\n";
    /**spaces to be added */
    for ($s = 0; $s < $d0; $s++) {
        echo "\t";
    }
    /**print the calender */
    for ($i = 0; $i < $stackNew->size(); $k++) {
        $val = $stackNew->peek();
        echo $stackNew->pop() . "\t";
        if (($val + $d0) % 7 == 0) {
            echo "\n";
        }
    }
    echo "\n";
} else {
    echo "enter valid date & year\n";
}
