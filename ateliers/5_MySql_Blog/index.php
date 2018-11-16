<?php 
session_start();
include 'functions.php';
include_once 'data.php';

$bdd = connectDB();
$articles = getAllArticles($bdd);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>BLOG</title>
</head>
<body>

<header>
    <i class="far fa-newspaper"></i>
    <h1>Bullsh*t News</h1>
    <a class="linkAdmin" href="connexion.php"><i class="fas fa-user-edit"></i></a>
<header>

<section class="newsFeed">

    <?php foreach ($articles as $article) { ?>
        <article>
            <h2><?= $article['titre'] ?> </h2>
            <h4><?= $article['soustitre'] ?> </h4>
            <small> Par <?= $article['auteur'] ?> , le <?= $article['date_post'] ?> </small>
            <p><?= $article['contenu'] ?></p>
        </article>
    <?php } ?>

</section>
  
</body>

</html>

<?php pre($articles); ?>