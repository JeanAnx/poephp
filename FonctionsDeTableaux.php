<?php 

include_once 'functions.php';
include_once 'functionsTableaux.php';

$listNumbers = [ 5 , 10 , 15 , 20];
$listStrings = [ "Bonjour" , "Comment" , "ça" , "Va" ];

$arrayResults = array_merge($listNumbers , $listStrings);

pre($arrayResults);

$newArray = [];

array_push($newArray, "John" , "Paul" , "George" , true);

preD($newArray);

$sportList = ["baseball" , "football" , "cricket" , "rugby" , "tennis"];

// array_splice — Efface (et remplace) une portion de tableau
$sportSpliced = array_splice($sportList, 3);

pre($sportSpliced);

// EXERCICE : extraire un nom au hasard dans ce tableau

$listName = ['Kilian' , 'Gauthier' , 'Julien' , 'Mathilde' , 'Sima' , 'Valentin' , 'Gabriel' , 'Léa' , 'Jean'];

/* echo '<h2>' . ($listName[getRandomIndex($listName)]) . '</h2>'; */

// echo "<h2>" . extractIndex($listName) . "</h2>";


$i = 1;
$prenom1 = "0";
$prenom2 = "1";

// do {
//     echo '<h2>' . $i . '</h2>';
//     echo '<p>' . $prenom1 . " vs " . $prenom2;
//     $i++;
// } while ( ($prenom1 = extractIndex($listName)) != ( $prenom2 = extractIndex($listName)));

// echo '<p>' . $prenom1 . " vs " . $prenom2;
// echo '<p>' . $prenom1 . " et " . $prenom2 . " matchent" . '</p>';

/*** ON S'AMUSE À GÉNÉRER DEUX NOMS ALÉATOIRES ET À LES COMPARER ***/
/***  LA BOUCLE S'ARRETE LORSQU'IL Y A UN "MATCH" */

// while ( ($prenom1 = extractIndex($listName)) != ( $prenom2 = extractIndex($listName))) {
//     echo '<h2>' . $i . '</h2>';
//     echo '<p>' . $prenom1 . " vs " . $prenom2;
//     $i++;
// };

// echo '<h2>' . $i . '</h2>';
// echo '<p>' . $prenom1 . " vs " . $prenom2;
// echo '<p>' . $prenom1 . " et " . $prenom2 . " matchent" . '</p>';



