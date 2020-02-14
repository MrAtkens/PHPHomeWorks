<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:41
 */

trait CanCallPack{
    private $callPackCount;

    public function callPack(int $callPackCount){
        $this->callPackCount = $callPackCount;
        echo "Количество призванных братанов: $this->callPackCount" . PHP_EOL;
    }
}