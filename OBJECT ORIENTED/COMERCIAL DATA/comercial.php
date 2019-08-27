<?php
/**********************************************************************
 * @Execution : default node : cmd> comercial.php
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
 * @since : 22-Aug-2019
 *
 ***********************************************************************/
class stock
{
    public $content;
    public function __construct()
    {
        $this->content = null;
        $this->filename = null;
    }
    public function read()
    {
        $this->content = json_decode(file_get_contents("readA.json"), true);
        //var_dump($sstock);
    }
    public function save()
    {
        file_put_contents("readA.json", json_encode($this->content));
    }
    public function buy($name, $price, $quantity)
    {
        array_push($this->content, array("name" => $name, "price" => $price, "quantity" => $quantity));
        return $name;
    }

    public function sell($name)
    {
        foreach ($this->content as $key => $val) {
            if ($val['name'] == $name) {
                unset($this->content[$key]);
                $this->content = array_merge($this->content);
            }

        }
    }

}
