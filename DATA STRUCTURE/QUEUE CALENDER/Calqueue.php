<?php
/***********************************************************************************
 * @Execution : default node : cmd> Calqueue.php
 *
 *
 * @Purpose : perform operations by using user input find calender
 *
 * @description :Store the Calendar in queue,
 * the first dimension the week of the month and the second dimension stores the day
 * of the week.
 *
 * @overview : Calender finder
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 16-aug-2019
 *
 ***********************************************************************************/
require '/home/admin1/sandy/PHP/DATA STRUCTURE/queue.php';
require '/home/admin1/sandy/PHP/DATA STRUCTURE/QUEUE CALENDER/utility.php';
/**create new queue */
$que = new Queue;
echo "enter month \n";
/**enter month */
$m = Utility::readInt();
echo " enter year \n";
/**enter year */
$y = Utility::readInt();
$months = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
$monthname = array('jan', 'feb', 'march', 'april', 'may', 'june', 'july', 'aug', 'sep', 'oct', 'nov', 'dev');
$week = array('Sun', 'M', 'T', 'Wed', 'Th', 'F', 'Sat');
$startDay = Utility::calculateDay(1, $m, $y); /** return day for year and moth */
echo $startDay . "\n";
/**if itis leapyear then update array with feb 29 */
if (Utility::checkLeapYear($y)) {
    $months[1] = 29;
}
/**validate year and month */
if (($m <= 12 && $m >= 1) && ($y >= 1000 && $y <= 9999)) {
    /** add element to queue within month range */
    for ($i = 1; $i <= $months[$m - 1]; $i++) {
        $que->enqueue($i);
    }
    /**display month name */
    echo "\t\t\t" . $monthname[$m - 1] . "\t" . $y;
    echo "\n";
    /**display week names */
    for ($k = 0; $k < sizeof($week); $k++) {
        echo $week[$k] . "\t";
    }
    echo "\n";
    /**add spaces at starting  */
    for ($i = 0; $i < $startDay; $i++) {
        echo "\t";
    }
    /**print elements from queue  */
    for ($j = 0; $j < $que->size(); $j++) {
        $val = $que->peek();
        echo $que->dequeue() . "\t";
        if (($val + $startDay) % 7 == 0) {
            echo "\n";
        }
    }
    echo "\n";
} else {
    echo "enter valid date & year\n";
}
