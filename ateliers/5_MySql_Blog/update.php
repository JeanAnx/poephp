<?php 
session_start();
include_once 'functions.php';
include_once 'data.php';
$bdd = connectDB();

pre($_POST);

if (!empty($_POST)) {

    updateArticle($bdd , $_POST['id'] , $_POST['titre'] , $_POST['soustitre'] , $_POST['contenu']);

    header('Location: admin.php?status=updated');

} else { ?>

    <h1>FUCK</h1>

<?php  } ?>

