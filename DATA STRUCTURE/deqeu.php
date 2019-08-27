<?php
class Node
{
    public $next;
    public $prev;
    public $data;
    /**create new node with data  */
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
class Deque
{
    public $head;
    public $tail;
    /*
     *adding elements at the front
     */
    public function addFront($item)
    {
        /**
         * create new_node of data
         * */
        $new_node = new Node($item);
        /**if deque is empty then assign it as head
         * else head prev as new nodes
         */
        if ($this->isEmpty()) {
            $this->tail = $new_node;
        } else {
            $this->head->prev = $new_node;
        }
        $new_node->next = $this->head;
        $this->head = $new_node;
    }
    /**
     * removing node at the end
     */
    public function removeRear()
    {

        /**create temp node as tail */
        $temp = $this->tail;
        if ($this->head == $this->tail) {
            $this->head = null;
        } else {
            /**unlink tail node by assigning as null */
            $this->tail->prev->next = null;
        }
        $val = $this->tail->data;
        $this->tail = $this->tail->prev;

        /** assign temp prev as null  */
        $temp->prev = null;
        /**return removed node value */
        return $val;
    }
    /*
     * Add node at end of deque
     * */
    public function addRear($item)
    {
        /**creating new node of data */
        $new_node = new Node($item);

        /**if deque is not null then next of tail is newnode */
        if (!$this->isEmpty()) {
            $this->tail->next = $new_node;
        } else {
            /**else head as newnode */
            $this->head = $new_node;
        }
        /**link newnode prev to tail  */
        $new_node->prev = $this->tail;
        $this->tail = $new_node;
    }
    /**
     * removing node at the front
     *
     */
    public function removeFront()
    {
        $temp = $this->head;
        if ($this->head == $this->tail) {
            $this->tail = null;
        }
        /**if it is empty then underflow */
        if ($this->isEmpty()) {
            echo "underflow\n";
        } else {
            /** unlink with head node and move head to next node */
            $this->head->next->prev = null;
        }
        $this->head = $this->head->next;
        $this->temp->next = null;
    }
    /*
     * if head is null then deque is empty
     */
    public function isEmpty()
    {
        if ($this->head == null) {
            return true;
        }
        return false;
    }
    /** displaying nodes in forward direction */
    public function displayForward()
    {
        /**create the temp node assign it as head */
        $temp = $this->head;

        /**if temp is null then underflow */
        if ($temp == null) {
            echo "underflow\n";
        }
        /**displaying data until temp is not null */
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->next;
        }
    }
    /*
     *displaying nodes in reverse direction
     */
    public function displayReverse()
    {
        /**create the temp node assign it as tail */
        $temp = $this->tail;
        /**displaying data until temp is not null */
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->prev;
        }
    }

}
// $deque = new Deque;
// $deque->addFront("a");
// $deque->addFront("b");
// $deque->addFront("c");
// $deque->displayForward();
// echo "\n";
// $deque->removeRear();
// $deque->displayForward();
// echo "\n";
// $deque->addRear("f");
// $deque->displayForward();
// echo "\n";
// $deque->addFront("g");
// $deque->displayForward();
