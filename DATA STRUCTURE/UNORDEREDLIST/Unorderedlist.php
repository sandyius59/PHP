<?php
/**********************************************************************
 * @Execution : default node : cmd> Unorderedlist.php
 *
 *
 * @Purpose : to add and delete element values using linkedlist
 *
 * @description :Read the Text from a file, split it into words and arrange it as Linked List.
 * Take a user input to search a Word in the List. If the Word is not found then add it
 * to the list, and if it found then remove the word from the List. In the end save the
 * list into a file
 *
 * @overview : orderedlist
 * @author : Sandeep kumar maurya  <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 18-Aug-2019
 *
 ***********************************************************************/
/*
creating a class node which will used to store the data and next pointer
 */
class Node
{
    public function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
/*
creating a class linked list which has several operations like push(),add,insertat()
& pop(),delete(),deletelastnode(),sort() then orderedcheck(),ispresentdeleteoradd(),deletelist()
 */
class LinkedList
{
    //constructer to make head=null
    public function __construct()
    {
        $this->head = null;
    }
    //add operation will add data to the end of the list
    public function add($data)
    {
        try
        {
            $newNode = new Node($data);
            if (!$this->head) {
                $this->head = $newNode;
            } else {
                $temp = $this->head;
                while ($temp->next) {
                    $temp = $temp->next;
                }
                $temp->next = $newNode;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    //delete operation will delete the item which is specified by the user
    public function delete($data)
    {
        try
        {
            $temp = $this->head;
            if ($this->head->data == $data) {
                $this->head = $temp->next;
            } else {
                while ($temp->data !== $data) {
                    $temppre = $temp;
                    $temp = $temp->next;
                }
                $temppre->next = $temp->next;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    /*
    it will check the user enterd element if it is present remove it ,
    if it is not present add at the end of linked list
     */
    public function isDeleteOrAdd($data)
    {

        try
        {
            $temp = $this->head;
            while ($temp) {
                if ($temp->data === $data) {
                    $this->delete($data);
                    return "removed data " . $data . "\n";
                }
                $temp = $temp->next;
            }
            $this->add($data);
            return "added data " . $data . "\n";
        } catch (Exception $e) {
            echo $e;
        }
    }
//getArray operation will returns the array format of linkedlist
    function print() {
        try
        {
            $temp = $this->head;
            $str = "";
            while ($temp) {
                $str = $str . $temp->data . "  ";
                $temp = $temp->next;
            }
            return $str;
        } catch (Exception $e) {
            echo $e;
        }
    }

    //isempty operation will check wheather linkedlist is empty or not
    public function isempty()
    {
        if (!$this->head) {
            return true;
        }

        return false;
    }
}
