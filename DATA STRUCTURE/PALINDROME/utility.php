<?php
class Utility
{
    public static function readString()
    {
        $var = readline("");
        /**if input is numeric then throw error */
        while (is_numeric($var)) {
            echo "enter valid input ";
            fscanf(STDIN, "%s", $var);
        }
        return $var;
    }

}
