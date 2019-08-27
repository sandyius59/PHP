<?php
class Node
{
    public $next;
    public $data;
    /**create new node with data */
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
class Stack
{
    public $top;
    private static $size = 0;
    /**add the elements to stack */
    public function push($item)
    {
        /**create newnode with data */
        $new_node = new Node($item);
        /**if top is null then newnode is top */
        if ($this->top == null) {
            $this->top = $new_node;
        } else {
            /**else add at starting  */
            $new_node->next = $this->top;
            $this->top = $new_node;
        }
        /**inc size */
        self::$size++;
    }
    /**
     *  removing elements at starting
     */
    public function pop()
    {
        /**if top is null stack underflow */
        if ($this->top == null) {
            echo "stack underflow \n";
            exit;
        }
        $val = $this->top->data;
        /** move top to next node */
        $this->top = $this->top->next;
        self::$size--;
        /**return value of removed node */
        return $val;
    }
    /**
     *  display the elements
     */
    public function display()
    {
        /**assign current as top */
        $current = $this->top;
        /**top is null then stack is empty */
        if ($current == null) {
            echo "stack is empty\n";
            exit;
        }
        /**traverse the elements unti it is null */
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
    /**return size */
    public function size()
    {
        return self::$size;
    }
    /**return true if itis empty */
    public function isEmpty()
    {
        return $this->top == null;
    }
    /**retunr top data */
    public function peek()
    {
        if (!$this->isEmpty()) {
            return $this->top->data;
        } else {
            echo "stack is empty\n";
        }
    }
}
// $obj = new Stack;
// $obj->push(10);
// $obj->push(20);
// $obj->push(40);
// $obj->display();
// echo "\n";
// $obj->push(50);
// echo "\n";
// $obj->display();
// $data= $obj->pop();
// echo "das ".$data;
// $obj->display();
// echo "\npeek ".$obj->peek();
// echo "\nsize ".$obj->size();
// $obj->pop();
// $obj->pop();
// $obj->display();
