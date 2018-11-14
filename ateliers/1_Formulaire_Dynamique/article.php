<?php    
    include_once 'data.php';
    include_once 'functions.php';
    // pre($_GET['id']); 
    // pre(ARTICLES[$_GET['id']['title']]);    
    $theArticle = ARTICLES[$_GET['id']['title']];

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

                  

        <a class="return" href="index.php?user=<?= $theArticle['user']?>">Back</a>
    
        <article class="theArticle">
            <h1><?= $theArticle['title'] ?></h1>
            <small>Par <?= $theArticle['user']?></small>
            <img class="pic" src="<?= $theArticle['imageUrl']?>" alt="#">
            <p class="paragraphe"><?= $theArticle['text'] ?></p>

        </article>

</body>
</html>  