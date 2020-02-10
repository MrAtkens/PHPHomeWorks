<?php


include_once "classes/Tag.php";
include_once "classes/Body.php";
include_once "classes/Attributes.php";

$div = new Tag("div", []);

$link = new Tag("a", []);

$link->setAttributes('href', "https://google.com");
$link->appendBody("Hello World");

$div->setAttributes("style", "background: red;
                              width: 100px;
                              height: 100px;");
$div->appendBody($link);

echo $div;