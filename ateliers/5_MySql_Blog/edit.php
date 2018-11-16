<?php
session_start();
include_once 'functions.php';
include_once 'data.php';
$bdd = connectDB();
pre($_GET);
$theArticle = getArticleById($_GET['id'],$bdd);
pre($theArticle);

?>

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

    <form class="edition" action="admin.php" method="post">

        <input class="hidden" type="text" value="">
        <input type="submit" class="goBack" value="Retour" name="login">

    </form>

<h1>Editer un article</h1>

<form class="creationForm" action="update.php" method="POST">

    <label for="titre">Titre : </label>
    <input type="text" name="titre" value="<?= $theArticle['titre'] ?>" id="titre">

    <label for="soustitre">Sous-titre : </label>
    <textarea name="soustitre" cols="30" rows="3"><?= $theArticle['soustitre']?></textarea>

    <label for="contenu">Texte : </label>
    <textarea name="contenu" id="" cols="30" rows="20"><?= $theArticle['contenu']?></textarea>

    <label>Auteur : <?= $_SESSION['name'] ?></label>
    <input  class="hidden" type="text" name="auteur" value="<?= $_SESSION['name'] ?>">

    <input type="text" value="<?= $theArticle['id'] ?>" name="id" class="hidden">

    <input id="buttonSubmit" type="submit" value="Éditer">

</form>
    
</body>

</html>