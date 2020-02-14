<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 14.02.2020
 * Time: 18:24
 */
spl_autoload_register(function ($name){
    $file = "classes" . DIRECTORY_SEPARATOR . "{$name}.php";
    if(!file_exists($file))
        die ("{$file} doesnt't exist");
    include_once $file;

    if(!class_exists($name)){
        die("Class <b>{$name}</b>  doesnt't exist");
    }
});