<?php 

include_once 'functions.php';
include_once 'data.php';

$bdd = connectDB();


pre($_GET);

if (!empty($_GET)) {

    
    if ( $_GET['action'] == "delete" && !empty($_GET['id'])) {

        pre(getArticleById($_GET['id'],$bdd));
        deleteArticle($bdd , $_GET['id']);
        header("Location: admin.php?delete=ok");

    }

    echo 'Woops ! Something\'s wrong...';


}