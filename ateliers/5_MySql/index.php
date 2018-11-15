<?php 
include 'functions.php';
$bdd = mysqli_connect("localhost","root","dawan","blog");

$query = mysqli_query($bdd , "SELECT * FROM `articles`");
$articles = mysqli_fetch_all($query , $resulttype = MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG</title>
</head>
<body>

<?php foreach ($articles as $article) { ?>
    <h1> <?= $article['titre'] ?> </h1>
    <h3> <?= $article['soustitre'] ?> </h3>
    <small> Par <?= $article['auteur'] ?> , le <?= $article['date_post'] ?> </small>
    <p><?= $article['contenu'] ?></p>
 <?php } ?>
    
</body>

</html>

<?php pre($articles); ?>