<?php

/**********************************************************************
 * @Execution : default node : cmd> addressbook.php
 *
 *
 * @Purpose : to create a json file and to make address book
 *
 * @description : to create a addressbook and to perform create new element ,delete element and
 * update element
 *
 * @overview : comercial data processing
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 24-Aug-2019
 *
 ***********************************************************************/
class Address
{
    public $content;
    //public $filename;

    public function __construct()
    {
        $this->content = null;
        $this->filename = null;
    }
    /**
     * function to read a json file
     * @param
     */

    public function read()
    {
        $this->content = json_decode(file_get_contents("address.json"), true);
    }
    /**
     * function to save all element in json file
     * @param
     */

    public function save()
    {
        file_put_contents("address.json", json_encode($this->content));
    }

    /**
     * function to add a new element
     * @param $name for elnemt name
     * @param $address its 2d element
     * @param $city its 3d elemnet
     */
    public function add($name, $address, $city)
    {
        array_push($this->content, array("name" => $name, "address" => $address, "city" => $city));
    }
    /**
     * function to delete element from json file
     * @param $name for elnemt name
     */

    public function delete($name)
    {
        foreach ($this->content as $key => $val) {
            if ($val['name'] == $name) {
                unset($this->content[$key]);
                $this->content = array_merge($this->content);
            }
        }
    }

    /**
     * function to update element from json file
     * @param $name for elnemt name
     */
    public function update($name)
    {
        foreach ($this->content as $key => $val) {
            if ($val['name'] == $name) {
                $this->content[$key]['city'] = "siwan";
            }
        }
    }

}
