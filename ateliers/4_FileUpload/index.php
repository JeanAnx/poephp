<?php 
session_start();
include_once 'functions.php';

$imgList = displayImg();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Upload File</title>
</head>

<body>

    <h1>FILE UPLOAD</h1>

    <?php   if (isset($_GET['upload'])) {
        
        
                if ($_GET['upload'] == "ok") {

                echo '<h2 class="success">Fichier "' . $_GET['name'] . '" bien envoyé</h2>';
                echo '<img class="success" src="https://i.imgflip.com/1hzzc0.jpg" alt="Good Job !"><br>';
                echo '<img class="uploaded" src="img/' . $_GET['name'] . '"alt="yes">';
            }

                    else {
                    echo '<h2 class="error">FUCK</h2>';
                    echo '<img class="error" src="https://i.imgur.com/w3gKBYw.png" alt="Fuck"><br>';
                }

            }
    ?>

    <form action="file.php" method="post" enctype="multipart/form-data">
    
        <label for="file">Envoyez un fichier :</label>
        <input type="file" name="file">
        <input id="buttonSubmit" type="submit" value="Envoyer">
        
    </form>

    <div class="mesImages">

            <h2>Mes images</h2>

            <?php foreach ($imgList as $img) { ?>
                <div class="imgList">
                    <img src="img/<?= $img ?>" alt="img">
                    <a class="deleteButton" href="delete.php?id=<?=$img?>"><i class="fas fa-trash-alt"></i></a>
                </div>
                
            <?php } ?>




    </div>

</body>

</html>

