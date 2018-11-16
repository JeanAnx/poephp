<?php 

session_start();
include_once 'functions.php';
include_once 'data.php';
$bdd = connectDB();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] == "yes") {

// SI LA CONNEXION EST RÉUSSIE ON BALANÇE LE HTML : 
        
        $userArticles = getArticlesByUser($_SESSION['name'] , $bdd);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>ADMIN</title>
</head>
<body>
    
</body>
</html>

        <body>
        
        <form  class="deconnexion" action="deco.php" method="POST">
            <input type="submit" name="status" value="Déconnexion">
        </form>

        <form  class="creation" action="creation.php" method="POST">
        <input type="submit" name="status" value="Nouvel article">
        <input type="text" hidden name="userId" value="">
        </form>

        <h1>Vos articles, <?= $_SESSION['name'] ?> : </h1>


        <section class="newsFeedAdmin">

         <?php   if (isset($_GET['delete']) && $_GET['delete']=="ok") { ?>
             
            <h2 class="warning">Article effacé ! </h2>

         <?php } ?>

         <?php   if (isset($_GET['status']) && $_GET['status']=="updated") { ?>
             
             <h2 class="success">Article édité ! </h2>
 
          <?php } ?>

         
        
            <?php foreach ($userArticles as $thisArticle) { ?>

                <article>

                    <h2><?= $thisArticle['titre'] ?> </h2>
                    <img src="<?= $thisArticle['img'] ?>" alt="">
                    <h4><?= $thisArticle['soustitre'] ?> </h4>
                    <small> Par <?= $thisArticle['auteur'] ?> , le <?= $thisArticle['date_post'] ?> </small>
                    <p><?= $thisArticle['contenu'] ?></p>
                    <div class="blocEdition">
                        <a href="edit.php?id=<?=$thisArticle['id']?>&action=edit">Éditer</a>
                        <a href="delete.php?id=<?=$thisArticle['id']?>&action=delete">Supprimer</a>
                    </div>
                    <hr>

                </article>
                    
           <?php  } ?>

        
        </section>

             
        </body>


    <?php } else { ?>

    <h1>Accès refusé</h1>

        <a href="index.php">HOME</a>


    <?php } ?>


</html>


<?php pre($_SESSION); ?>