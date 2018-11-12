<?php 
require 'functions.php';
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