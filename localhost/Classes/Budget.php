<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 10.02.2020
 * Time: 16:27
 */

class Budget {

   /* public static $name = 'John';
    public $firstName = 'Wick';

    public static function action(){
        echo __METHOD__;
    }*/

    public static $bank = 0;
    public $collection = 0;

    public function  addMoney($count){
        self::$bank += $count;
        return $this;
    }

    public function  spendMoney($count){
        if(self::$bank + $this->collection < $count){
            die("����� ���");
        }

        $k = self::$bank - $count;
        if($k < 0){
           self::$bank = 0;
            $this->collection += $k;
        }
        else{
            self::$bank -= $count;
        }
    }

    public function collectMoney($count){
        if($count > self::$bank) {
            die("� ��� �� ����� �� ������� �����");
        }
        else {
            $this->collection += $count;
            self::$bank -= $count;
            return $this;
        }
    }

    /*public function __construct(){
        self::$name = 'Bob';
    }*/

}