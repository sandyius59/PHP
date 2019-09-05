<?php
/**********************************************************************************
 * @Execution : default node : cmd> ioc.php
 *
 *
 * @Purpose : perform operations by using inversion of control and dependency injection
 *
 * @description : to perform key cencept of inversion of control and dependency injection
 *
 *
 * @overview : ioc and dependency injection
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 05/sep/2019
 *
 *************************************************************************************/
class Part
{

}
class Engine
{
    protected $part;

    public function __construct(part $part)
    {
        $this->part = $part;
    }
}
class Car
{
    protected $engin;
    public function __construct(engine $engin)
    {
        $this->engin = $engin;
    }
    public function run()
    {
        echo "bmw ";
    }
}
class container
{
    public static $deps = [];
    public static function init()
    {
        $deps = include "/home/admin1/sandy/PHP/IOC/DEPENDENCY/dependency.php";
        foreach ($deps as $key => $closure) {
            static::$deps[strtolower($key)] = $closure; // strtolower (return to lowcase string)
        }
    }
    // passing a parameter of $classname
    public static function getInstance(string $classname)
    {
        //array_key_exists = checks an array for a specified key
        //call_user_func = Call the callback given by the first parameter
        if (array_key_exists(strtolower($classname), static::$deps)) {
            return call_user_func(static::$deps[strtolower($classname)]);
        } else {
            throw new Exception("class not found\nadd dependency first\n");
        }
    }
    // passing a 2 paramter of $classname and $closure
    public static function addDependency(string $classname, closure $closure)
    {
        self::$deps[strtolower($classname)] = $closure;
    }
}
container::init();
$deb = include "/home/admin1/sandy/PHP/IOC/DEPENDENCY/dependency.php";

$car = container::getInstance("Car");

$car->run();

print_r($car);
