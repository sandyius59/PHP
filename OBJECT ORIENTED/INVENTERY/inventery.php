<?php
/**********************************************************************
 * @Execution : default node : cmd> inventery.php
 *
 *
 * @Purpose : to manage data of json file
 *
 * @description :Create a JSON file having Inventory Details for Rice, Pulses and Wheats
 * with properties name, weight, price per kg.
 *
 * @overview : inventery
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 22-Aug-2019
 *
 ***********************************************************************/
function readJson($file)
{
    $fileStr = file_get_contents($file);
    $jsonData = json_decode($fileStr, true);
    return $jsonData;
}
/**
 * function to print json data
 */
function printJson($jsonData)
{
    $str = array('Rice', 'Pulses');
    //taking every object in json array and printing
    foreach ($jsonData as $groc) {
        $name = $groc['name'];
        $weight = $groc['weight'];
        $price = $groc['price'];
        echo "Details of inventory\n";
        printf('Name : %s ' . PHP_EOL . 'weight : %d' . PHP_EOL . 'price : %d ' . PHP_EOL . 'value : %d  ' . PHP_EOL . PHP_EOL, $name, $weight, $price, $weight * $price);
    }
}
$file = "/home/admin1/sandy/PHP/OBJECT ORIENTED/INVENTERY 1/inventery.json";
//calling the writejson function
$jData = readJson($file);
printJson($jData);
