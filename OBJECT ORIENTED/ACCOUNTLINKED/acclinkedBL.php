<?php
include_once "accountlink.php";
$arr = json_decode(file_get_contents("/home/admin1/sandy/PHP/OBJECT ORIENTED/ACCOUNTLINKED/readL.json"));
$obj = new Linked();

$obj->buy("sandep", "15", "20");
$obj->disp($arr);
$obj=json_encode(file_get_contents("/home/admin1/sandy/PHP/OBJECT ORIENTED/ACCOUNTLINKED/readL.json")):
?>