<?php 


function pre($thing) {
    echo '<pre>';
    print_r($thing);
    echo '</pre>';
};


function getTheArticle($array , $user) {
    $theArticles = [];
    foreach ($array as $value) {
        if ($value['user'] == $user ) {
            $theArticles[] = $value;
        }
    }
    return $theArticles;
};
