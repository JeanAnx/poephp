<?php
    if (empty($_SESSION)) {
        session_start();
    };
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Traitement données</title>
    </head>
    <body>
    
        <h1>$_SESSION</h1>
     
    <!-- FORMULAIRE -->

    <?php 

        if (isset($_GET['user']) && $_GET['user'] == "ok") {
            
            echo '<h2 class="success">L\'utilisateur a bien été enregistré</h2>'; 
            
            } else if (isset($_GET['user']) && $_GET['user'] == "notok") { ?>

                <h2 class="error">Le formulaire n\'a pas pu être enregistré</h2>
        
        <?php } ?>

        <form action="form.php" method="POST">
    
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom">
    
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom">
    
            <div id="admin">
                <label for="admin">Admin</label>
                <input type="checkbox" name="admin" value="true">
            </div>
            <input id="buttonSubmit" type="submit" value="Envoyer">
    
        </form>
        
        
        <div>
        
            <?php 

                if(isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                    echo '<a href="admin.php">Administration</a>';
                }
            
            ?>


        </div>

        <?php if (!empty($_SESSION['nom'])) { ?>

            <form class="destroy" action="destroy.php" method="post">

            <input class="inputDestroy" type="submit" value="Déconnexion">

        </form>

        <?php } ?>




    </body>
    </html>
        

   

    <?php 
        echo '$_SESSION : ';
        var_dump($_SESSION); 
    ?>
