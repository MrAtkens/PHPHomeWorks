<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:14
 */

include_once('./interfaces/Kind.php');

class Animal implements Kind{

    private $legsStatus;
    private $eatRation;
    private $huntStatus;
    private $visionStatus;
    private $sleepStatus;

    public function __constructor(bool $legsStatus, bool $eatRation, bool $huntStatus, bool $sleepStatus, bool $visionStatus){
        $this->legsStatus = $legsStatus;
        $this->eatRation = $eatRation;
        $this->sleepStatus = $sleepStatus;
        $this->huntStatus = $huntStatus;
        $this->visionStatus= $visionStatus;
    }

    public function hunt(bool $huntStatus){
        $this->huntStatus = $huntStatus;
        if($this->huntStatus)
            echo "Хищник" . PHP_EOL;
        else
            echo "Травоядное" . PHP_EOL;
    }

    public function eat(bool $eatRation){
        if($this->huntStatus && $eatRation){
            $this->eatRation = $eatRation;
            echo "Всё правильно он ест мясо" . PHP_EOL;
        }
        else if(!$this->huntStatus && !$eatRation){
            $this->eatRation = $eatRation;
            echo "Всё правильно он ест мясо" . PHP_EOL;
        }
        else{
            echo "Такого не бывает" . PHP_EOL;
        }
    }

    public function sleepAnimal(bool $sleepStatus){
        $this->sleepStatus = $sleepStatus;
        if($this->sleepStatus)
            echo "Оно спит" . PHP_EOL;
        else
            echo "Оно не может спать" . PHP_EOL;

    }

    public function move(bool $legsStatus){
        $this->legsStatus = $legsStatus;
        if($this->legsStatus)
            echo "У него есть ноги, оно ходит" . PHP_EOL;
        else
            echo "У него нет ног, оно ползёт" . PHP_EOL;
    }

    public function see(bool $visionStatus){
        $this->visionStatus = $visionStatus;
        if($this->visionStatus)
            echo "Оно видит тебя" . PHP_EOL;
        else
            echo "Оно слепое, оно не видит тебя" . PHP_EOL;
    }
}