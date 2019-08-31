<?php
/***********************************************************************************
 * @Execution : default node : cmd> InventryManage.php
 *
 *
 * @Purpose : to manage inventry
 *
 * @description :Create a JSON file having Inventory Details for Rice, Pulses and Wheats
 * with properties name, weight, price per kg.
 *
 * @overview :
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 24-aug-2019
 *
 ***********************************************************************************/

//require("Utility.php");
class Inventery
{
    public function __construct($name, $weight, $price)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->price = $price;
    }
    public $name;
    public $weight;
    public $price;
}
/**
 * function to create array
 * @param
 */
function arrayobject()
{
    try {
        $name = ["Rice", "Wheat", "Pulse"];
        $arrObj = [];
        for ($i = 0; $i < 3; $i++) {
            echo "Enter price of " . $name[$i] . " ";
            $weight = trim(fgets(STDIN));

            echo "Enter weight of " . $name[$i] . "in KG";
            $price = trim(fgets(STDIN));

            echo "\n\n";

            $arrObj[$i] = new Inventery($name[$i], $weight, $price);
        }

        return $arrObj;
    } catch (Exception $e) {
        echo $e;
    }
}
/**
 * function to put attribute in json file
 * @param $arr
 */
function jsonPut($arr, $file)
{
    $json = json_encode($arr);

    file_put_contents($file, $json);
}
// get file from json file
function getjson($file)
{
    $contents = file_get_contents($file);
    $arr = json_decode($contents, true);
    return $arr;
}
// display the all values
function printValue($arr)
{
    try {
        $price = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $tt = $arr[$i]['weight'] * $arr[$i]['price'];
            echo "price for " . $arr[$i]['name'] . "is :" . $tt . "rs\n";
            $price += $tt;
        }
        echo "total price is " . $price . "rs\n";
    } catch (Exception $e) {
        echo $e;
    }
}
// run function for call function
function run()
{
    $file = "manage.json";
    $arr = arrayObject();
    jsonPut($arr, $file);
    $jsonArr = getjson($file);
    printValue($jsonArr);
}
run();
