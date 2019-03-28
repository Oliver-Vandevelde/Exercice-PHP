<?php
    session_start();

    $mdp = $_COOKIE['mdp'];
    $pseudo = $_COOKIE['pseudo'];

    if(isset($_POST['pseudo'])&&isset($_POST['mdp'])) {
        setcookie('pseudo',$_POST['pseudo'], false);
        setcookie('mdp',$_POST['mdp'],false );
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Second page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h3>Session 1</h3>
    <?php
        echo "<p> Bonjour ".$_SESSION["nom"]." ".$_SESSION["prenom"]." tu as ".$_SESSION["age"]." ans </p>";
    ?>
<h3>login</h3>
    <?php
        if(isset($_COOKIE['pseudo'])&&isset($_COOKIE['mdp'])) {
            echo "$pseudo"." "."$mdp";
        }
        echo "<h3> Modifier les logs </h3>";
        echo '<p><form action="#" method="post"></p>';
        echo '<p>Votre nom : <input type = "texte" name = "pseudo"><p/>';
        echo '<p>Votre mdp : <input type = "password" name = "mdp"></p>';
        echo '<p><input type = "submit" value = "Envoyer"></p>';

        if(isset($_COOKIE['pseudo'])&&isset($_COOKIE['mdp'])) {
            echo "<p>".$_COOKIE['pseudo']."</p>"; 
            echo "<p>".$_COOKIE['mdp']."</p>";
        }
    ?>
</body>
</html>