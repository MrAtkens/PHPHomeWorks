<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:40
 */

trait CanGeneratePoison{
    private  $poisonDamagePoints;

    public function  generatePoison(int $poisonDamagePoints){
        $this->$poisonDamagePoints = $poisonDamagePoints;
        echo "Урон яда: $this->poisonDamagePoints" . PHP_EOL;
    }
}