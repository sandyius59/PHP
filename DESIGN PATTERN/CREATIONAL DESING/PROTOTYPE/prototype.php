<?php
/***********************************************************************************
 * @Execution : default node : cmd> prototype.php
 *
 *
 * @Purpose :Prototype Design Pattern. Prototype allows us to hide the complexity of
 * making new instances from the client
 *
 * @description :The concept is to copy an existing object rather than creating a new
 * instance from scratch, something that may include costly operations.
 *
 * @overview : prototype desing pattern
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 27-aug-2019
 *
 ***********************************************************************************/
interface Product
{}
class Factory
{
    private $product;
    public function __construct($product)
    {
        $this->product = $product;
    }
    public function getProduct()
    {
        return clone $this->product;
    }
}
class SomeProduct implements Product
{
    public $name;
}
$prototypeFactory = new Factory(new SomeProduct());
$firstProduct = $prototypeFactory->getProduct();
$firstProduct->name = "The first product\n";
$secondProduct = $prototypeFactory->getProduct();
$secondProduct->name = "Second product\n";
print_r($firstProduct->name);
// The first product
print_r($secondProduct->name);
// Second product
