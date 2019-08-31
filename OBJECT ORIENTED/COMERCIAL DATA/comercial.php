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
    /**
     * @desc to read json file
     * @param
     * @return
     */
    public function read()
    {
        $this->content = json_decode(file_get_contents("readA.json"), true);
        //var_dump($sstock);
    }
    /**
     * @desc to save json file
     * @param
     * @return
     */
    public function save()
    {
        file_put_contents("readA.json", json_encode($this->content));
    }
    /**
     * @desc to buy a product (adding operation)
     * @param $name passing name
     * @param $price passing price value
     * @param $quantity passing qunatity values
     * @return $name return name
     */
    public function buy($name, $price, $quantity)
    {
        array_push($this->content, array("name" => $name, "price" => $price, "quantity" => $quantity));
        return $name;
    }
/**
 * @desc to sell product (delete opration )
 * @param $name it's passing name values
 * @return
 */
    public function sell($name)
    {
        try {
            foreach ($this->content as $key => $val) {
                if ($val['name'] == $name) {
                    unset($this->content[$key]);
                    $this->content = array_merge($this->content);
                }

            }
        } catch (Exception $e) {
            echo $e;
        }
    }

}
