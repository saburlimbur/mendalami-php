<?php

$values = array(1, 2, 3, 4);
var_dump($values);



$names = ["Sabur", "Limbur"];
var_dump($names[0]);

$names[0] = "Tomo";
var_dump($names);

unset($names[1]);
var_dump($names);
$names[] = "Joko";
var_dump($names);
var_dump(count($names));