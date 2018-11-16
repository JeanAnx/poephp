<?php 

session_start();
include_once 'functions.php';
include_once 'data.php';
$bdd = connectDB();
pre($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Page Admin</title>
</head>


<?php 

    if (isset($_GET['status']) && $_GET['status'] == "fatalerror") { 
    
?>
    
    <h1>FATAL ERROR ...</h1>
    <img src="https://i.kym-cdn.com/entries/icons/original/000/003/398/2013_6beb.jpeg" alt="fuck">
    
<?php } ?>
    

<body>
    
    <h1>Se connecter : </h1>
    
    <form action="connexion.php" method="POST">

        <label for="">Login : </label>
        <input type="text" name="login">

        <label for="">Mot de passe : </label>
        <input type="password" name="password">

        <input type="submit">

    </form>


<?php  ?>

</body>


<?php 

// Si une erreur a été détectée (info envoyée en GET) :


// Si on a envoyé en POST un login :

if (isset($_POST['login']) || isset($_SESSION['login'])) {

    $theUser = getUserByLogin($_POST['login'] , $users);

    if ($theUser['password'] == $_POST['password']) {
        $_SESSION['name'] = $theUser['login'];
        $_SESSION['admin'] = "yes";
        header('Location: admin.php');
    } else {

        header('Location:connexion.php?status=fatalerror');
    }
    
    pre($theUser);

}