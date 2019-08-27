<?php
require "/home/admin1/sandy/PHP/DATA S/UNODEREDLIST/UnOrderedList.php";
class Queue
{
    public $list;
    /**
     * Constructor function to initialize the list
     */
    public function __construct()
    {
        $this->list = new UnOrderedList();
    }
    /**
     * function to push data at the end of the queue
     * @param item the item to be pushed
     */
    public function enqueue($item)
    {
        $this->list->append($item);
    }
    /**
     * Function to remove the item from the start of the list
     */
    public function dequeue()
    {
        return $this->list->popPos(0);
    }
    /**
     * Function to check if the queue is empty or not
     * @return boolean true of false
     */
    public function isEmpty()
    {
        return $this->list->isEmpty();
    }
    /**
     * Function to check the size of queue
     * @return size the size of the queue
     */
    public function size()
    {
        return $this->list->size();
    }
    public function __toString()
    {
        return $this->list->__toString();
    }
}
