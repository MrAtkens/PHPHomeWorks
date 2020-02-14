<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:30
 */

interface SpiderKind{
    public function generatePoison(int $poisonDamagePoints);
    public function generateWeb(int $webLenght);
    public function generateSkin(int $skinArmorPoints);
}
