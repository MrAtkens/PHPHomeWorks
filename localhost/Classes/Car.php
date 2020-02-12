<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 10.02.2020
 * Time: 17:29
 */

class Car {

    public function moveForward($car) : bool {
        if(!$car instanceof Car)
            return true;
        else
            return false;
    }

    public function turnLeft($car) : bool {
        if(!$car instanceof Car)
            return true;
        else
            return false;
    }

    public function  turnRight($car) : bool {
        if(!$car instanceof Car)
            return true;
        else
            return false;
    }
}