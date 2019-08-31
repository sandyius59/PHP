<?php
/***********************************************************************************
 * @Execution : default node : cmd> balanced.php
 *
 *
 * @Purpose : perform operations to check function true or false
 *
 * @description :parentheses are used to order the performance of operations. Ensure parentheses
 * must appear in a balanced fashion
 *
 * @overview : check paranthesis
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 14-aug-2019
 *
 ***********************************************************************************/
//require '/home/admin1/sandy/PHP/DATA STRUCTURE/stack.php';
require '/home/admin1/sandy/PHP/DATA STRUCTURE/stack.php';
/** input string  */
$string = "(5+6)∗(7+8)/((4+35+6)∗(7+8/4+3))";
/** create stack  */
$stack = new Stack;
/**split the string into arry */
$strArr = str_split($string);
$flag = true;
try {
    for ($i = 0; $i < sizeof($strArr); $i++) {
        $exp = $strArr{$i};
/**if exp is '(' then push else exp is ')' then pop */
        if ($exp == '(') {
            $stack->push($exp);
        } else if ($exp == ')') {
            if ($stack->isEmpty()) {
                $flag = false;
            } else {
                $stack->pop();
            }
        }
    }
/**if flag is true then string is balanced else not balanced  */
    if ($flag) {
        echo "true\n";
    } else {
        echo "false";
    }
} catch (Exception $e) {
    echo $e;
}
