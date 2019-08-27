
<?php

class Utility
{
   
    static public function flip($times){
        $head = 0 ;
        //loop runs till times
        for($is = 0;$is<$times;$is++)
        {
            //checks for head if true heads get incremented
            if(rand(0,10)>0.5)
            {
                $head++;
            }
        }
        echo "heads is ".$head." \nTails is ".($times-$head)."\n";
    }
    
    static public function isLeapYear($year)
    {
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }
    
    static public function getInt()
    {
        fscanf(STDIN,"%d\n",$val);
        while(!is_numeric($val))
        {
            echo "ivalid input try again\n";
            fscanf(STDIN,"%d\n",$val);
        }
        return $val ;
       /* fscanf(STDIN,"%d\n",$val);
        if(is_numeric($val)){
            return $val;
        }
        else{
            echo "invalid input";
            Utility::getInt() ;
            */
        }
        /**
         * Take String input
         */
    static function getString(){
            fscanf(STDIN,"%s\n",$val);
            while(!is_string($val)){
                echo "ivalid input try again";
                fscanf(STDIN,"%s\n",$val);
            }
             return $val ;
        }
      
    static function getIntArr()
    {
            echo "enter array size ";
            $size = Utility::getInt();
            $arr = array();
            echo "enter array value ";
            for($i = 0 ; $i < $size ; $i++ )
            {
                $arr[$i] = Utility::getInt(); 
            }
            return $arr ;
       }
       
       static function getStrArr()
       {
        echo "enter array size ";
        $size = Utility::getInt();
        $arr = array();
        echo "enter array value \n";
        for($i = 0 ; $i < $size ; $i++ )
        {
            $arr[$i] = Utility::getString(); 
        }
        return $arr ;
   }
   
   static function printArr($arr)
   {
       $size = sizeof($arr);
       $s = "{ ";
       for($i = 0 ; $i < $size ; $i++)
       {
           $s.= $arr[$i].",";
       }
       $s = $s."}";
       return $s ;
   }
   /**
     * prints Power of 2
     * @param power the value till to count power of 2
     */
    static public function powerOf2($power)
    {
        for($s= 1 ; $s<=$power ; $s++)
        {
            $pow = 2**$s ;
            echo "\n".$pow;
        }
    }
    /**
     * Detects if given strings are anagrams or not
     * @param s1 the first string
     * @param s2 the second string to check
     * @return true/false if anagrram or not
     * 
     */
    static function isAnagram($s1,$s2)
    {
            $arr1 = str_split($s1,1);
            $arr2 = str_split($s2,1);
            if(count($arr1)!=count($arr2))
            {
                return false ;
            }
            for($i = 0 ; $i < count($arr1);$i++)
            {
                if(array_search($arr1[$i],$arr2)!==false)
                {
                    $key=array_search($arr1[$i],$arr2);
                    unset($arr2[$key]);
                }
                
            }
            if(count($arr2)==0)
            {
                return true ;
            }
            else
            {
                return false ;
            }
        }
        /**
         * Funtion to check if a string is pallindrome or not 
         * 
         * @param s1 string value to check 
         */
    static function isPallindrome($s1 )
    {
            $arr1 = str_split($s1,1);
            $arr2 = str_split(strrev($s1),1);
            if(count($arr1)!=count($arr2))
            {
                return false ;
            }
            $size = count($arr1);
            for($i = 0 ; $i < $size;$i++)
            {
                if($arr1[$i]!=$arr2[--  $size])
                {
                    return false ;
                }
            }
            return true ;
        }
    /**
     * Function to find if no is prime or not
     * @param n the no to check
     * @return true/false if prime or  not
     */
    static function isPrime($n)
    {
        for ($i = 2; $i <= $n / 2; $i++) 
        {
            if ($n % $i == 0) 
            {
				return false;
			}
        }
        return true ;
    }
    /**
     * Function to search binary integer in an array
     */
    static function linear($n , $arr)
    {
        sort($arr);
        $size = count($arr);
        for($i=0 ; $i<$size ; $i++)
        {
            if($arr[$i]==$n)
            {
                return $i ;
            }
        }
        return false ;
    }
    /**
     * Function to imlement binary search
     * return index if found or false if not found
     * 
     * @param n the no to search
     * @param arr the array in which to search 
     */
    static function binarySearch($n , $arr )
    {
        $size = count($arr);
        $mid ;
        $low = 0 ;
        $high = $size-1 ;
        for($i = 0 ;$i < $size ; $i++)
        {
            while($low<=$high)
            {
                $mid = round(($low + $high)/2);
                if($n==$arr[$mid])
                {
                    return $mid ;
                }
                else if($n>$arr[$mid])
                {
                    $low = $mid+1;
                }
                else
                {
                    $high = $mid - 1 ;
                }
            }
        }
        return false ;
    }
    
    /**
     * Function to sort integer array using insertion sort
     * @param arr the array to be sorted
     * @return arr sorted array
     */
    static function insertionSort($arr)
    {
        //gets the size of array
        $size = count($arr);
        for($i = 1 ;$i <$size ; $i++)
        {
            // getting value for back element
            $j = ($i - 1);
            //saving it in temperary variable;
            $temp = $arr[$i];
            while($arr[$j]>$temp&&$j>=0)
            {
                $arr[$j+1] = $arr[$j];
                $j--; 
            }
            $arr[$j+1] = $temp ;
        }
        return $arr;
    }
    
    /**
     * Function to sort an array of string
     * 
     * @param arr array tobe sorted 
     * @return arr sorted array
     */
    static function insSortString  ($arr)
    {
       //gets the size of array
       $size = count($arr);
       for($i = 1 ;$i <$size ; $i++)
       {
           // getting value for back element
           $j = ($i - 1);
           //saving it in temperary variable;
           $temp = $arr[$i];
           while(strcmp($arr[$j],$temp)>0&&$j>=0)
           {
               $arr[$j+1] = $arr[$j];
               $j--; 
           }
           $arr[$j+1] = $temp ;
       }
       return $arr;
   }
/**
 * Function to sort integer array using bubble sort algorithm
 * 
 * @param arr the array to be sorted
 * @return arr sorted array 
 */
    static function bubbleSort($arr)
    {
        $n = sizeof($arr); 
  
        // Traverse through all array elements 
        for($i = 0; $i < $n; $i++)  
        { 
            // Last i elements are already in place 
            for ($j = 0; $j < $n - $i - 1; $j++)  
            { 
                // traverse the array from 0 to n-i-1 
                // Swap if the element found is greater than previous element
                // than the next element 
                if ($arr[$j] > $arr[$j+1]) 
                { 
                    $t = $arr[$j]; 
                    $arr[$j] = $arr[$j+1]; 
                    $arr[$j+1] = $t; 
                } 
            } 
        } 
        return $arr;
    }
    /**
     * Function to find squre root of a no using newtons method
     * @param c the integer no of which to find square root 
     * @return c the value of square root
     */
    static function sqrt($c)
    {
        $t = $c ;
        $epsilon = 1e-15 ;
        while(abs($t-($c/$t))>$epsilon*$t)
        {
            $t = ($c/$t + $t)/2 ;
        }
        return $t ;
    }
    /**
     * Function to calculate temperature from celcius to fahrenhiet and vice-versa
     * 
     * @param temp the temperature to convert 
     * @param chtemp the character containing the c or f fot temp 
     * @return conv the converted temperature 
     */
    static function tempconv($temp , $chtemp)
    {
        if(strpos($chtemp , "c")===false&&strpos($chtemp , "C")===false)
        {
            $conv =  ($temp * 9/5) + 32 ; 
        }
        else
        {
            $conv =  ($temp - 32) * 5/9 ; 
        }
        return $conv ;
    }
    /** 
     * static function calculating day of week using below formula and returning it
     * 
     * @return d0 the day of the week
     */
    static function dayOfWeek($d , $m , $y)
    {
        $y0 = floor($y - (14 - $m) / 12) ;
        $x = floor($y0 + floor($y0/4) - floor($y0/100) + floor($y0/400));
        $m0 = $m + 12 * floor((14 - $m) / 12) - 2 ;
        $d0 = ($d + $x + floor((31*$m0) / 12)) % 7;
        return $d0;
    }
    /**
     * Function to convert decimal to binary 
     * 
     * @param integer the decimal number
     * @return bin the binary nomber
     */
    static function toBin($dec)
    {
        $bin = "";
        while ($dec>=1){
        $bin = ($dec % 2).$bin;
        $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
        }
        return $bin;
    }
    /**
     * function to convert binary to decimal 
     */
    static function binToDec($bin)
    {
        $binArr = str_split($bin);
        $dec = 0 ;
        $j = 0 ;
        for ($i=count($binArr)-1 ; $i >= 0 ; $i--) 
        { 
            if($binArr[$i] == 1)
            {
                $dec = $dec +  2**$j ;
            }
            $j++;
        }
        echo $dec ;
        return $dec ;
    }
    //sets the start time ot system time
    static function startTime()
    {
        return $start = (microtime(true)*1000);
    }
    //sets stop time at system time
    static function stopTime()
    {
        return $stop = (microtime(true)*1000);
    }
    //get elapsed time by counting start time and stop time
    static function elapsedTime($start , $stop)
    {
        return "Time : ".(($stop-$start)/1000)." seconds\n";
    }
    /**
     * function to read the file and return the array of words
     */
    static function readFile($fname)
    {
        //opens the file if not found die by printing the error "unable to open file"
        $file = fopen($fname ,"r") or die("Unable to open file ");
        //reads the file and save the contents in the string
        $contents = fread($file , filesize($fname));
        //returns contents
        return $contents ;
    }
    static function print2d($arr)
    {
        for($i = 0 ;$i<count($arr);$i++)
        {
            echo "\n";
            for($j = 0 ;$j <count($arr[$i]);$j++)
            {
                echo $arr[$i][$j]."  ";
            }
        }
    }
    
} 
/**
 * Function to check the expression have balanced parenthesis or not 
 */
function balParethesis($exp)
{
    require("Stack.php");
//    / $exp = "(((5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3))";
    $stack = new Stack();
    /**
     * if open paranthesis it will push else it will pop at closed
     */
    for ($i=0; $i < strlen($exp); $i++) 
    { 
        if($exp[$i]=='(')
        {
            $stack->push($exp[$i]);
        }
        else if($exp[$i]==')')
        {
            //checking if already empty
            if($stack->isEmpty())
            {
                echo"Unbalanced\n";
            return;
            }
            $stack->pop();
        }
    }
    //if empty its balanced and not if not balanced
    if ($stack->isEmpty())
    {
        echo "paranthesis is balanced\n";
    }
    else
    {
        echo "Paranthesis not balanced\n";
    }
}
Utility::isAnagram(5,15)
?>