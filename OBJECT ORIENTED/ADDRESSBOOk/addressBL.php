<?php
include_once "/home/admin1/sandy/PHP/OBJECT ORIENTED/ADDRESSBOOk/addressbook.php";
$obj = new address();
$obj->read();
//var_dump($obj->content);
//$obj->add("deepak", "mahabalipuram", "chennai");
//var_dump($obj->content);

//$obj->delete("sandeep");
//$obj->update("deepak");
try {
    echo "\nenter \nadd for 1 \nupdata for 2 \ndelete for 3\n";
    $choose = fscanf(STDIN, "%s\n");
    switch ($choose[0]) {
        case 1:

            echo "Add full address\n";
            echo "enter the name address and city\n";
            $name = fscanf(STDIN, "%s\n");
            $address = fscanf(STDIN, "%s\n");
            $city = fscanf(STDIN, "%s\n");
            $obj->add($name, $address, $city);
            $obj->save();
            break;
        case 2:
            echo "Update your address\n";
            echo "enter the value as u want to updata\n";
            $name = fscanf(STDIN, "%s\n");
            $obj->update($name);
            $obj->save();
            break;
        case 3:
            echo "datele your details\n";
            echo "enter the name us u want to delete\n";
            $name = fscanf(STDIN, "%s\n");
            $obj->delete($name);
            break;
    }
} catch (Exception $e) {
    echo $e;
}
$obj->save();
