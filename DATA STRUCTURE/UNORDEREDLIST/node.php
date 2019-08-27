<?php
include_once "/home/admin1/sandy/PHP/DATA STRUCTURE/Unorderedlist.php";
$arr = explode(" ", file_get_contents("/home/admin1/sandy/PHP/DATA STRUCTURE/read.txt"));

$link = new LinkedList();
foreach ($arr as $i) {
    $link->add($i);
}
//echo $link->print();
$link->isDeleteOrAdd("ji");
file_put_contents("/home/admin1/sandy/PHP/DATA STRUCTURE/write.txt", $link->print());
