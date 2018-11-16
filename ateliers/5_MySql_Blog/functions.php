<?php

include_once 'data.php';

function pre($thing) {

    echo '<pre>';
    print_r($thing);
    echo '</pre>';
};

function connectDB() {
    $bdd = mysqli_connect("localhost","root","dawan","blog");
    mysqli_set_charset ( $bdd , 'UTF8' );
    return $bdd;
}

function getUserByLogin($login , $users) {
    
    foreach ($users as $user) {
        
        if ($user['login'] == $login) {
        
            return $user;

        }

    }

    header('Location: admin.php?status=fatalerror');
    return false;

}

function getAllArticles($bdd) {
    $query = mysqli_query($bdd , "SELECT * FROM `articles`");
    $articles = mysqli_fetch_all($query , $resulttype = MYSQLI_ASSOC);
    return $articles;
}

function getArticlesByUser($user , $bdd) {
    $query = mysqli_query($bdd , "SELECT * FROM `articles` WHERE `auteur` = '$user' ORDER BY `date_post` DESC");
    $userArticles = mysqli_fetch_all($query , $resulttype = MYSQLI_ASSOC);
    return $userArticles;
}

function getArticleById($id , $bdd) {
    $query = mysqli_query($bdd , "SELECT * FROM `articles` WHERE `id` = $id");
    $article = mysqli_fetch_array($query , $resulttype = MYSQLI_ASSOC);
    return $article;
}

function createArticle($bdd , $titre , $soustitre , $contenu , $auteur) {
    $query = mysqli_query($bdd , "
    INSERT INTO `articles`(`titre`, `soustitre`, `contenu`, `auteur`, `date_post`) 
    VALUES ('$titre' , '$soustitre' , '$contenu' , '$auteur' , NOW() )");
    $stmt = mysqli_prepare($bdd,$query);
    mysqli_stmt_execute($stmt);
}

function deleteArticle($bdd , $id){
    $query = mysqli_query($bdd , 
    "DELETE FROM `articles` WHERE `id` = $id");
    $stmt = mysqli_prepare($bdd,$query);
    mysqli_stmt_execute($stmt);
}

function updateArticle($bdd , $id , $titre , $soustitre , $contenu){
    $query = mysqli_query($bdd , "UPDATE `articles` SET `titre`='$titre',`soustitre`='$soustitre' , `contenu` = '$contenu' WHERE `id` = $id ");
    $stmt = mysqli_prepare($bdd,$query);
    mysqli_stmt_execute($stmt);
}