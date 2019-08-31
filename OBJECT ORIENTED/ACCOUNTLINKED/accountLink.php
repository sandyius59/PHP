<?php
/**********************************************************************
 * @Execution : default node : cmd> accountLink.php
 *
 *
 * @Purpose : to Maintain the Cash Balance.
 *
 * @description :creates Banking Cash Counter where peoplecome in to deposit Cash
 * and withdraw Cash
 *
 * @overview : comercial data processing
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 21-Aug-2019
 *
 ***********************************************************************/

class Node
{
    public function __construct($name = null, $price = null, $quantity = null)
    {
        $this->data = array("name" => $name, "price" => $price, "quantity" => $quantity);
        $this->next = null;
    }
}
class Linked
{

    public function __construct()
    {
        $this->head = null;
    }

    public function buy($name, $price, $quantity)
    {
        try {
            $newnode = new node($name, $price, $quantity);
            if ($this->head == null) {
                $this->head = $newnode;
            } else {
                $temp = $this->head;
                while ($temp->next) {
                    $tamp = $temp->next;
                }
                $tamp->next = $newnode;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    /**
     * @desc it's function for selling product
     * @param $name it's passing name value
     * @param  $price it's passing price value
     * @param $quantity it's passing quantity value
     * @return null
     */
    public function sell($name, $price, $quantity)
    {
        try {
            $temp = $this->head;
            if ($this->head->data == $data) {
                $this->head = $temp->next;
            }
            while ($temp->data != $data) {
                $temppre = $temp;
                $temp = $temp->next;
            }
            $temppre->next = $temp->next;
        } catch (Exception $e) {
            echo $e;
        }
    }
//it's function for display all data
    public function disp()
    {
        try {
            $temp = $this->head;
            $arr = [];
            while ($temp) {
                array_push($arr, $temp->data);
                $temp = $temp->next;
            }
            return $arr;
        } catch (Exception $e) {
            echo $e;
        }
    }

    // public function read()
    // {
    //     $this->head = json_decode(file_get_contents("readL.json"), true);
    // }

    // public function save()
    // {
    //     file_put_contents("readL.json", json_encode($this->head));
    // }

}
try {
    $obj = new Linked();
    $content = json_decode(file_get_contents("readL.json"), true);
//$obj->read();
    //$obj->buy("sandy", "24", "45");
    //$obj->save();

    foreach ($content as $val) {
        $obj->buy($val['name'], $val['price'], $val['quantity']);
    }

    $obj->buy("sand", "14", "20");
    var_dump($obj->disp());
    file_put_contents("readL.json", json_encode($obj->disp()));
} catch (Exception $e) {
    echo $e;
}

//$obj->save();
