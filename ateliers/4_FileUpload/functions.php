<?php

function pre($thing) {

    echo '<pre>';
    print_r($thing);
    echo '</pre>';
};

function uploadFile($file) {
    $dossier = "img/";

    if ($file['file']['error'] == "4" ) {

        header("Location: index.php?upload=notkok");

        } else {

        $fichier = basename($file['file']['name']);
        pre($fichier);

            if (file_exists($file['file']['tmp_name'])) {
                $resultUpload = move_uploaded_file($file['file']['tmp_name'] , $dossier.$fichier);
                echo 'The file : ';
                pre($file);

                if ($resultUpload) {
                    header("Location: index.php?upload=ok&name=".$file['file']['name']);
                }
            }
        
    }
        
}

function displayImg(){
    $dossier = "img/";
    $imgList = scandir($dossier);
    $imgListSorted = array_splice($imgList,2);
    return $imgListSorted;
}