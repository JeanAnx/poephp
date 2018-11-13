<?php 
    echo 'Fichier Atelier Librairies';
    include_once "functions.php";
    include_once "lesLibrairies/data.php";
    include_once "lesLibrairies/form.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Rayon Fruits</h1>

    <div>
    
        <?php
            
        returnArray(FRUITS);

        pre(FRUITS);

        ?>
    </div>

    <div>

        <ul>

        <?php foreach (FRUITS as $value) { ?>
            
            <li><a href="#"> <?= $value ?> </a></li>

        <?php } ?>
    
        </ul>
    
    </div>
    

    
</body>
</html>