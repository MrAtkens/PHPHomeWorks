<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 04.02.2020
 * Time: 16:29
 */
include_once('autoload.php');

$input = Tag::input();
$input->setAttribute('class', 'row');
echo $input;