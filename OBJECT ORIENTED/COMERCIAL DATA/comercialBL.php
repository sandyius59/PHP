<?php
include_once "/home/admin1/sandy/PHP/OBJECT ORIENTED/COMERCIAL DATA/comercial.php";
//create object
$obj = new stock();
$obj->read();
$obj->buy("oopo", "600", "15");
$obj->save();
//$obj->sell("oopo");
$obj->save();
