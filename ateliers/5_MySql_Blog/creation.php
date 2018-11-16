<?php 
session_start();

include_once 'functions.php';
include_once 'data.php';
$bdd = connectDB();

pre($_SESSION);
pre($_POST);
$errorsList = [];

/******* VÉRIFICATION FORMULAIRE ***********/


if ( isset($_POST['status']) && $_POST['status'] == "ok"){

    foreach ($_POST as $row) {
    
        if ( empty($row) ) {

            $_POST['status'] = 'notok'; 

?>

            <h2>L'article n'a pas été correctement rempli</h2>

<?php         

        }
             
    }

}

if ( isset($_POST['status']) && $_POST['status'] == "ok"){

    createArticle($bdd , $_POST['titre'] , $_POST['soustitre'] , $_POST['contenu'] , $_POST['auteur']); 

?>

<h1 class="success">Article Créé</h1>

<?php 

    } 

?> 

<!-- /****************** ENVOI ARTICLE DANS BD *****************/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <form class="goBack" action="admin.php" method="post">

        <input class="hidden" type="text" value="<?= $_SESSION['name'] ?>">
        <input type="submit" class="goBack" value="Retour" name="login">

    </form>

<h1>Nouvel article</h1>

<form class="creationForm" action="" method="POST">

    <label for="titre">Titre : </label>
    <input type="text" name="titre" value="" id="titre">

    <label for="soustitre">Sous-titre : </label>
    <textarea name="soustitre" id="" cols="30" rows="3"></textarea>

    <label for="contenu">Texte : </label>
    <textarea name="contenu" id="" cols="30" rows="20"></textarea>

    <label>Auteur : <?= $_SESSION['name'] ?></label>
    <input class="hidden" type="text" name="auteur" value="<?= $_SESSION['name'] ?>">

    <input class="hidden" type="text" value="ok" name="status" >

    <input id="buttonSubmit" type="submit" value="Créer">

</form>
    
</body>

</html>