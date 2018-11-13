<?php 

require '../functions.php';

function echoThis($arg) {
    echo $arg;
}

$test = [ 10 , 2 , "trois" , "quatre" , "cinq" , 6 , 7 ];


echoThis("Ceci est un echo");

function preDump($thing) {
    echo '<pre>';
    var_dump($thing);
    echo '</pre>';
}

preDump($test);

function argsMultiples ($arg1 , $arg2 = null /* Valeur par défaut */ , $arg3) {
    echo $arg1 . " / " . $arg3;
};

function returnValue($array) {
    foreach ($array as $key) {
        echo $key . '<br>';
    }
};

returnValue($test);

function plusGrand($array,$number) {
    echo '<br>';
    $plusGrand = [];
    foreach ($array as $value) {
        if ( $value > $number ) {
            $plusGrand[] = $value;
        }
    }
    return $plusGrand;
}

$liste = plusGrand($test,4);
pre($liste);
