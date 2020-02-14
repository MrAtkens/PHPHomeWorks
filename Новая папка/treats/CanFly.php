<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:39
 */

trait CanFly{

    private $wingsStatus;

    public function fly(){
        echo "Оно летит" . PHP_EOL;
    }
}