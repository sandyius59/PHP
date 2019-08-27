<?php
include_once "/home/admin1/sandy/PHP/OBJECT ORIENTED/ADDRESSBOOk/addressbook.php";
$obj = new address();
$obj->read();
//var_dump($obj->content);
//$obj->add("deepak", "mahabalipuram", "chennai");
//var_dump($obj->content);

//$obj->delete("sandeep");
$obj->update("deepak");
$obj->save();
