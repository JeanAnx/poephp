<?php 

include_once '../functions.php';

$name = "Jean";

$result = strlen($name);

preD($result);

$majuscules = strtoupper($name);
$minuscules = strtolower($name);

preD($majuscules);
preD($minuscules);