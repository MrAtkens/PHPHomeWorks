<?php


class myStatic
{
//    public static $name = "John";
//    public $firstName = "Wick";
//
//    public static function action(){
//    echo 'Hello';
//    }

//    public static $name = "John";
//
//    public  function  __construct(){
//        myStatic::$name = "bob";
//    }
//    public $name = 'John';
//
//    public static function action(){
//        $this ->name; // tak pisat nelzya
//    }

public static $name = "John";
    static  function printName(){
        echo static::$name;
    }

}