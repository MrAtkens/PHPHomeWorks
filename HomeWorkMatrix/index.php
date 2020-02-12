<?php
include_once 'Matrix.php';
$primeMatrix = new Matrix([[123, 12, 32, 43], [983, 43, 54, 23], [12, 12, 123]]);
$secondMatrix = new Matrix([[12, 24, 23], [43, 32, 43, 34, 15], [32, 12]]);
$primeMatrix->add($secondMatrix);
//$primeMatrix->diff($secondMatrix);
//$primeMatrix->mult($secondMatrix);

var_dump($primeMatrix->toArray());