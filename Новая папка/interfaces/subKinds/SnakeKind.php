<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:30
 */

interface SnakeKind{
    public function termalVision(int $termalVisionDistance);
    public function generateSkin(int $skinArmorPoints);
    public function generatePoison(int $poisonDamagePoints);
}