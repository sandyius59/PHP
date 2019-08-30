<?php
/***********************************************************************************
 * @Execution : default node : cmd> factory.php
 *
 *
 * @Purpose :Factory design pattern used to define a runtime interface for creating an object
 *
 * @description :In Factory pattern, we create object without exposing the creation
 * logic to the client and refer to newly created object using a common interface.
 *
 * @overview : Factory desing pattern
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 28-aug-2019
 *
 ***********************************************************************************/
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

// have the factory create the Automobile object
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel());
