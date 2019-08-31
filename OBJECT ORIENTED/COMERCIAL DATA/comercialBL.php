<?php
include_once "/home/admin1/sandy/PHP/OBJECT ORIENTED/COMERCIAL DATA/comercial.php";
//create object
$obj = new stock();
$obj->read();
//$obj->buy("oopo", "600", "15");

//$obj->sell("oopo");
//$obj->save();

echo "enter the name ,price,quantity";
$name = fscanf(STDIN, "%s\n");
$price = fscanf(STDIN, "%s\n");
$quantity = fscanf(STDIN, "%s\n");
$obj->buy($name, $price, $quantity);
$obj->save();
