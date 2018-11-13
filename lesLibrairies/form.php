<?php 

function returnArray($array) {
    echo '<br><ul>';

    foreach ($array as $value) {
        echo '<li>' . $value . '</li>';
    }

    echo '</ul>';
}