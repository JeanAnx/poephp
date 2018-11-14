<?php

function getRandomIndex($array) {
    $arrayLength = count($array);
    echo($arrayLength);
    return random_int(0,$arrayLength-1);
};

function extractIndex($array) {
    $index = array_rand($array);
    return $array[$index];
}