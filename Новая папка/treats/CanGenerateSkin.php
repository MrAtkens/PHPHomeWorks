<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:41
 */

trait CanGenerateSkin{
    private  $skinArmorPoints;

    public function generateSkin(int $skinArmorPoints){
        $this->skinArmorPoints = $skinArmorPoints;
        echo "Очки брони: $this->skinArmorPoints" . PHP_EOL;

    }
}