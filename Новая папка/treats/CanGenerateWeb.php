<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:40
 */

trait CanGenerateWeb{
    private $webLenght;

    public function generateWeb(int $webLenght){
        $this->webLenght = $webLenght;
        echo "Длина паутины: $this->webLenght" . PHP_EOL;
    }
}