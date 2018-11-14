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
    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.js"
        integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
         crossorigin="anonymous"></script>
    
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

                <?php $theArticles = getTheArticle(ARTICLES,$_GET['user']) ?>
                
                <?php foreach ($theArticles as $theArticle) { ?>
                    
                    <article>
                        <?php $key = array_search($theArticle['title'], array_column(ARTICLES,'title')); ?>
                        <a href="article.php?id=<?= $key ?>">
                        <h2><?= $theArticle['title']?></h2>
                        <small>Par <?= $theArticle['user']?></small>
                        <img class="pic" src="<?= $theArticle['imageUrl']?>" alt="#">
                        <p class="paragraphe"><?= $theArticle['text'] ?></p>
                        </a>
                    </article>
                    
                <?php } 
                                
                }
                    
                    if (isset($_GET['user']) && empty($theArticles)) { ?>
                
                    <article class="ohno">
                        <h3><?= $_GET['user'] ?> n'a pas encore écrit d'article (quel boloss ce <?= $_GET['user'] ?>)<h3>
                        <img src="https://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-11/256/face-screaming-in-fear.png" alt="Oh no">
                        <?php }  ?>
                    </article>

        </section>

        <section class="creationArticle">

            <h1>Création d'article sur le bacon</h1>

            <form action="">

                <label for="">Auteur :</label>
                <div class="radios">
                    <input class="focusOut" name="author" type="radio" value="Pierre" >Pierre
                    <input class="focusOut" name="author" type="radio" value="Paul">Paul
                    <input class="focusOut" name="author" type="radio">Jacques
                    <input name="author" id="inputRadio" type="radio">Nouvel auteur
                    <input name="author" id="inputText" type="text" class="hidden">
                </div>

                <label for="">Titre :</label>
                <input type="text">

                <label for="">Texte :</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>

                <input type="button" value="Bouton">



            </form>



        </section>


        <script>

            var focusOut = $('.focusOut');
            for (let i of focusOut) {
                this.on('focus', function() {
                    $('#inputText').css('opacity') = 0;

                })
            }

            var inputRadio = $('#inputRadio');
            console.log(inputRadio); 

            inputRadio.on('focus',function(){
                console.log('focus');
                $('#inputText').toggleClass('hidden');
            });

            inputRadio.on('focusout', function(){
                console.log('FocusOut');
                $('#inputText').toggleClass('hidden');
               
            });
            

        </script>

</body>
</html>