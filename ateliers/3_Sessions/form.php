<?php
session_start();

function pre($thing) {

    echo '<pre>';
    print_r($thing);
    echo '</pre>';
};

echo '$_POST : ';
pre($_POST);

function addNewUser($nom , $prenom , $admin){

    if (!empty($nom) && !empty($prenom)) {

        $_SESSION['prenom'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['admin'] = $admin;

        echo '<h2>L\'utilisateur a bien été enregistré</h2>';
        header("Location: index.php?user=ok");

        } else {

            header("Location: index.php?user=notok");

        }


}

addNewUser($_POST['nom'] , $_POST['prenom'] , $_POST['admin']);

echo 'Après injection des datasUser, $_SESSION : ';
pre($_SESSION);
