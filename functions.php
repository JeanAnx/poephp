<?php

function pre($thing) {

    echo '<pre>';
    print_r($thing);
    echo '</pre>';
};

function preD($thing) {

    echo '<pre>';
    var_dump($thing);
    echo '</pre>';
};