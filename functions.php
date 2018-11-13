<?php

function pre($thing) {
    echo '<hr>';
    echo '<pre>';
    print_r($thing);
    echo '</pre>';
};