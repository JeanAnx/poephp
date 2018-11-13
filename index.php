<?php 
require 'functions.php';
session_start();
$i;
$_SESSION['test'] = $i + 1;
echo '$_post :';
pre($_POST);
echo '$_files :';
pre($_FILES);
echo '$_cookie :';
pre($_COOKIE);
echo '$_session :';
pre($_SESSION);

// DEFINIR UNE CONSTANTE =>
define("MACONSTANTE" , [100 , 1000]);
echo('Ma Constante : ');
pre(MACONSTANTE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Formulaire</title>
</head>

    <form action="" enctype="multipart/form-data" method="post">
    
        <label for="name">Nom : </label>    
        <input type="text" id="name" name="name"><br>
        <label for="message">Message : </label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <label for="cv">Fichier :</label>
        <input type="file" id="cv" name="cv" ><br>
        <input type="submit">

    </form>


<body>
    
</body>
</html>

<?php

echo '$GLOBALS :';
pre($GLOBALS);
// L'ENSEMBLE DES VARIABLES DÉFINIES DANS LE SCRIPT

echo '$_SERVER :';
pre($_SERVER);
// TOUTES LES INFOS LIÉES AU SERVEUR

echo '$_GET :';
pre($_GET);

echo '$_FILES :';
pre($_FILES);

/*

echo '<h1> Hello WOOOOOOOOORLD </h1>';

$nom = "Annaix";
$prenom = "Jean";
$description = 'Je m\'appelle';

echo $description . " " . $prenom . " " . $nom;

$str = "10";
var_dump($str);

// => Le + devant une variable de type string la convertit en number
var_dump(+$str);
var_dump($str/2);

// Le moins devant un integer le bascule en négatif
$g = 20;
var_dump(-$g);

*/


/*

$array1 = [
    "nom" => "Annaix",
    "prénom" => "Jean",
    "âge" => 32,
    "ville" => "Nantes",
];

pre($array1);


$articles = [
    1 => [
        "titre" => "LE TITRE" ,
        "sous-titre" => "LE SOUS-TITRE" ,
        "texte" => "LE TEXTE",
    ],
    
    2 => [
         "titre" => "LE TITRE2",
         "sous-titre" => "LE SOUS-TITRE2" ,
         "texte" => "LE TEXTE2",
    ],

    3 => [
        "titre" => "LE TITRE3",
        "sous-titre" => "LE SOUS-TITRE3" ,
        "texte" => "LE TEXTE3",
    ]

];

PRE($articles);

foreach ($articles as $theArticle) {
    pre($theArticle);
};


*/