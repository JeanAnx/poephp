<?php 

include 'form.php';
preD($_GET);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Vérification Chaînes Formulaire</title>
</head>
<body>

    <h1>Vérif longueur chaîne de c.</h1>

<?php 
    if (!empty($_GET)) {

        if (strlen($_GET['firstname']) < 2 ) {

            echo '<div class="errorsList"> > Prénom trop court (2 lettres min)</div>';

            } else if (strlen($_GET['firstname']) > 15 ){

                echo '<div class="errorsList"> > Prénom trop long (25 lettres max) </div>';

                } else {

                    $_SESSION['firstname'] = $_GET['firstname'];

                }
                
        if ( strlen($_GET['lastname']) > 20 ) {

            echo '<div class="errorsList"> > Nom trop long ! (20 lettres max) </div>';

            } else if ( strlen($_GET['lastname']) < 3 ) {

                echo '<div class="errorsList"> > Nom trop court (3 lettres min)</div>';

                    } else {

                        $_SESSION['name'] = $_GET['lastname'];

                    }

    }



?>

    <form action="" method="GET">

        <label for="firstname">Prénom : </label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Nom : </label>
        <input type="text" name="lastname" id="lastname">

        <label for="email">Email</label>
        <input type="email">

        <input id="buttonSubmit" type="submit" value="Envoyer">



    </form>
    
</body>
</html>

<?php pre($_SESSION); ?>
