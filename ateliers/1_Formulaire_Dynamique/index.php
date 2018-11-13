<?php 
    include_once 'data.php';
    include_once 'functions.php';

        // pre(USERS);
        // pre($_GET);
    
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
    
    <form action="" method="get">
        <label for="user">Sélectionnez un utilisateur :</label>
        <select name="user" id="user">
        
            <?php foreach (USERS as $theUser) { ?>
            
            <option value="<?= $theUser ?>"><?= $theUser ?></option>

            <?php } ?>

            <input id="button" type="submit" value="Envoyez le bousin">
        
        </select>
    </form>
        
          <?php  if (isset($_GET['user'])) { ?>

                <p class="choice"><?=$_GET['user']?> a été selectionné</p>
            
                <section class="board">

                <?php   $theArticles = getTheArticle(ARTICLES,$_GET['user']) ?>
                
                    <?php foreach ($theArticles as $theArticle) { ?>
                       
                        <article>
                            <h2><?= $theArticle['title']?></h2>
                            <small>Par <?= $theArticle['user']?></small>
                            <img class="pic" src="<?= $theArticle['imageUrl']?>" alt="#">
                            <p class="paragraphe"><?= $theArticle['text'] ?></p>
                        </article>
                    <?php } 
                                
                }
                    
                    if (empty($theArticles)) { ?>
                    
                        <article class="ohno">
                            <h3><?= $_GET['user'] ?> n'a pas encore écrit d'article (quel boloss ce <?= $_GET['user'] ?>)<h3>
                            <img src="https://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-11/256/face-screaming-in-fear.png" alt="Oh no">
                            <?php }  ?>
                        </article>


        </section>

</body>
</html>