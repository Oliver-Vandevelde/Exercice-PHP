<?php

    // superglobales exo 2

    session_start();

    $_SESSION["nom"] = "Oliver";
    $_SESSION["prenom"] = "Vandevelde";
    $_SESSION["age"] = 25;

    // superglobales exo 3


    if(isset($_POST['pseudo'])&&isset($_POST['mdp'])) {
        setcookie('pseudo',$_POST['pseudo'], false);
        setcookie('mdp',$_POST['mdp'],false );
    }
    // if(isset($_POST['mdp'])){
    //     setcookie('mdp',$_POST['mdp'],false );
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h1>Parcours Php</h1>
<section class="variable">
    <h2>Les variables</h2>
    <h3>exo 1</h3>
        <?php
            $nom = "Vandevelde";
            $prenom ="Oliver";
            $age = 25;
            echo "Bonjour $prenom, enfant de la famille $nom, ayant atteint le level $age";
        ?>
    <h3>exo 2</h3>
        <?php
            $km = 1;
            echo "<p> $km </p>";
            $km = 3;
            echo "<p> $km </p>";
            $km = 125;
            echo "<p> $km </p>";
        ?>
    <h3>exo 3</h3>
        <?php
            echo "<div>";
            $maString = "Ceci est ma phrase";
            $monInteger = 10;
            $monFloat = 3.4;
            $monBooleen = true;
            echo "string : $maString, integer : $monInteger, float : $monFloat, booleen : $monBooleen";
            echo "</div>"
        ?>
    <h3>exo 4</h3>
        <?php
            $int;
            echo "<p> $int </p>";
            $int = 10;
            echo "<p> $int </p>";
        ?>
    <h3>exo 5</h3>
        <?php
            $addition1 = 3 + 4;
            $addition2 = 5 * 20;
            $addition3 = 45 / 5;
            echo "<p> $addition1 </p>";
            echo "<p> $addition2 </p>";
            echo "<p> $addition3 </p>";
        ?>
    <h3>exo 6</h3>
        <?php
            $prixInitial = 785;
            $ristourne = 0.3;
            $montantRistourne = $prixInitial * $ristourne;
            $prixFinal = $prixInitial - $montantRistourne;
            echo "Prix de depart du t-shirt : $prixInitial €, montant de la ristourne : $montantRistourne €, prix final : $prixFinal €";
        ?>
</section>
<section class="condition">
    <h2>Les condition</h2>
    <h3>exo 1</h3>
        <?php
            $age = 25;
            if( $age >= 18 ){
                echo "<p>Vous etes majeur</p>";
            }else{
                echo "<p> vous etes mineur</p>";
            }
        ?>
    <h3>exo 2</h3>
        <?php
            $isEasy = true;
            if ( $isEasy === true ){
                echo "<p> C'est facile !!</p>";
            }else{
                echo "<p> C'est difficile !!</p>";
            }
        ?>
    <h3>exo 3</h3>
        <?php
            $age = 25;
            $genre = "homme";
            if(($genre === "homme")&&($age>=18)){
                echo "<p>Vous êtes un homme et vous êtes majeur</p>";
            }elseif($genre === "homme"){
                echo "<p>Vous êtes un homme et vous êtes mineur</p>";
            }if(($genre === "femme")&&($age>=18)){
                echo "<p>Vous êtes un femme et vous êtes majeur</p>";
            }elseif($genre === "femme"){
                echo "<p>Vous êtes un femme et vous êtes mineur</p>";
            }
        ?>
    <h3>exo 4</h3>
        <?php
            $magnitude = 8;
            switch($magnitude){
                case 1 ;
                    echo "<p>Micro-séisme impossible à ressentir.</p>";
                    break;
                case 2 ;
                    echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>";
                    break;
                case 3 ;
                    echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>";
                    break;
                case 4 ;
                    echo "<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>";
                    break;
                case 5 ;
                    echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>";
                    break;
                case 6 ;
                    echo "<p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>";
                    break;
                case 7 ;
                    echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>";
                    break;
                case 8 ;
                    echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>";
                    break;
                case 9 ;
                    echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p>";
                    break;
            }

        ?>
    <h3>exo 5</h3>
        <?php
            $maVariable = "Homme";
            if($maVariable != 'Homme'){
                echo "<p>C'est une developpeuse !!!</p>";
            }else{
                echo "<p>C'est un développeur !!!</p>";
            }
        ?>
    <h3>exo 6</h3>
        <?php
            $monAge = 25;
            if( $monAge >= 18 ){
                echo "<p>tu es majeur</p>";
            }else{
                echo "<p>tu n'es pas mineur</p>";
            }
        ?>
    <h3>exo 7</h3>
        <?php
            if($maVariable == false){
                echo "<p>c'est pas bon</p>";
            }else{
                echo "<p>c'est ok</p>";
            }
        ?>
    <h3>exo 8</h3>
        <?php 
            if($maVarible){
                echo "<p>c'est ok</p>";
            }else{
                echo "<p>c'est pas bon</p>";
            }
        ?>
</section>
<section class="boucle">
    <h2>Les boucles</h2>
    <h3>exo 1</h3>
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo "$i, ";
            }   
        ?>
    <h3>exo 2</h3>
        <?php
            $base = 0;
            $nombre = 17;
            for ($base = 0; $base <= 20; $base++) {
                $add = $base * $nombre;
                echo " $add, ";
            }
        ?>
    <h3>exo 3</h3>
        <?php
            $nombre = 17;
            for ($base = 100; $base >= 10; $base--) {
                $add = $base * $nombre;
                echo " $add, ";
            }
        ?>
    <h3>exo 4</h3>
        <?php
            $nombre = 1;
            while($nombre < 10){
                echo "$nombre , ";
                $nombre = $nombre + ( $nombre / 2);
            }
        ?>
    <h3>exo 5</h3>
        <?php
            for ($base = 1; $base <= 15; $base++) {
                echo " $base : On y arrive presque, ";
            }
        ?>
    <h3>exo 6</h3>
        <?php
            for ($base = 20; $base >= 0; $base--) {
                echo " $base : C'est presque bon, ";
            }
        ?>
    <h3>exo 7</h3>
        <?php
            $pas = 1;
            $nombre = 0;
            while($pas <= 100){
                $nombre ++;
                echo "$nombre : On tient le bon bout ,  ";
                $pas += 15 ;
            }
        ?>
    <h3>exo 8</h3>
        <?php
            $pas = 200;
            $nombre = 0;
            while($pas >= 0){
                $nombre ++;
                echo "$nombre : Enfin !!!! ,  ";
                $pas -= 12 ;
            }
        ?>
</section>
<section class="fonction">
    <h2>Les fonction</h2>
    <h3>exo 1</h3>
        <?php
            function retour ($retour = true) {
                return "$retour";
            }
            echo retour();
        ?>
    <h3>exo 2</h3>
        <?php
            function retour2 ($retour = "abcdefghijklmnopqrstuvwxyz") {
                return "$retour";
            }
            echo retour2();
        ?>
    <h3>exo 3</h3>
        <?php
            function concatenation ($nom = "Oliver" , $prenom = "Vandevelde"){
                return "$nom$prenom";
            }
            echo concatenation();
        ?>
    <h3>exo 4</h3>
        <?php
            function compare($nombre1 = 10 , $nombre2 = 20){
                if($nombre1 > $nombre2){
                    return ("Le premier nombre est plus grand");
                }if($nombre1 == $nombre2){
                    return ("Les deux nombres sont identiques");
                }if($nombre1 < $nombre2){
                    return ("Le premier nombre est plus petit");
                }
            }
            echo compare();
        ?>
    <h3>exo 5</h3>
        <?php
            function concatenation2 (){
                $nombre = 123;
                $lettre = abc;
                return "$nombre$lettre";
            }
            echo concatenation2 ();
        ?>
    <h3>exo 6</h3>
        <?php
            function moi (){
                $nom = " Vandevelde";
                $prenom = " Oliver";
                $age = 25;
                return " Bonjour ".$nom.$prenom." ,tu as ".$age." ans ";
            }
            echo moi();
        ?>
    <h3>exo 7</h3>
        <?php
            function sexeetage ($age , $genre){
                if(($genre == "homme")&&($age>=18)){
                    return "Vous êtes un homme et vous êtes majeur";
                }elseif($genre == "homme"){
                    return "Vous êtes un homme et vous êtes mineur";
                }if(($genre == "femme")&&($age>=18)){
                    return "Vous êtes un femme et vous êtes majeur";
                }elseif($genre == "femme"){
                    return "Vous êtes un femme et vous êtes mineur";
                }else{
                    return "Veuillez entrez des valeurs correcte";
                }
            }
            echo sexeetage($age = 25 , $genre = homme );
        ?>
    <h3>exo 8</h3>
        <?php
            function calcule ($a=0,$b=0,$c=0){
                $somme = $a + $b + $c;
                return "$somme";
            }
            echo calcule($a = 10,$b = 5,$c = 2);
        ?>
</section>
<section class="tableaux">
    <h2>Les tableaux</h2>
    <h3>exo 1</h2>
        <?php
            $arrayMounth = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre"];
            var_dump($arrayMounth);
        ?>
    <h3>exo 2</h2>
        <?php
            echo "<p> $arrayMounth[2] </p> <p> $arrayMounth[5] </p>";
            echo "<p>" . $arrayMounth[7] = "Aôut" . "</p>";
        ?>
    <h3>exo 3</h2>
        <?php
            $arrayRegion = [
                01 =>"Ain",
                03 =>"Allier",
                07 =>"Ardèche",
                15 =>"Cantal",
                26 =>"Drôme",
                38 =>"Isère",
                42 =>"Loire",
                43 =>"Haute-Loire",
                63 =>"Puy-de-Dôme",
                69 =>"Rhône",
                73 =>"Savoie",
                74 =>"Haute-Savoie"];
            echo "<p> $arrayRegion[69] </p>";
            $arrayRegion[57] = "Metz";
            echo "<p> $arrayRegion[57] </p>";
            asort($arrayRegion);
            foreach($arrayRegion as $key => $value){
                echo "<p> Le département ".$value." a le numéro ".$key."</p>";
            }
        ?>
    <h3>exo 4</h2>
        <?php
        $feux = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
        foreach($feux as $key => $value){
            echo "<p>Mail : Salut ".$value.", devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)</p>";
        }
        ?>
</section>
<section class="url">
    <h2>Les paramètres d'URL</h2>
    <h3>exo 1</h3>
        <?php
            echo "<p>index.php?nom=Nemare&prenom=Jean</p>";
            echo $_GET["prenom"] . ' ' . $_GET["nom"];
        ?>
    <h3>exo 2</h3>
        <?php
            echo "<p>index.php?nom=Nemare&prenom=Jean(&age=25)</p>";
            if($_GET["age"] == ""){
                echo $_GET["prenom"] . ' ' . $_GET["nom"] . " ,l'age n'est pas defini";
            }else{
                echo $_GET["prenom"] . ' ' . $_GET["nom"] . ' ' . $_GET["age"].' ans';
            }
        ?>
    <h3>exo 3</h3>
        <?php
            echo "<p>index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>";
            echo "La date de debut est le " . $_GET["dateDebut"] . " Et la date de fin est le  " . $_GET["dateFin"];
        ?>
    <h3>exo 4</h3>
        <?php
            echo "<p>index.php?langage=PHP&serveur=LAMP</p>";
            echo "Le language est ".$_GET["langage"]." et le serveur est ".$_GET["serveur"];
        ?>
    <h3>exo 5</h3>
        <?php
            echo "<p>index.php?semaine=12</p>";
            echo "Nous sommes a la ".$_GET["semaine"]."éme semaine."
        ?>
    <h3>exo 6</h3>
        <?php
            echo "<p>index.php?batiment=12&salle=101</p>";
            echo "Aller au batiment ".$_GET["batiment"]." ensuite dans la salle ".$_GET["salle"];
        ?>
</section>
<section class="formulaire">
    <h2>Les formulaires</h2>
    <h3>exo 1</h3>
        <?php
            $nomGet = $_GET['nom'];
            $prenomGet = $_GET['prenom'];
        ?>
        <form action="index.php" method="get">
            <p>Nom : <input type="text" name="nom" /></p>
            <p>Prenom : <input type="text" name="prenom" /></p>
            <p><input type="submit" value="Envoyez"></p>
        </form>
    <h3>exo 2</h3>
        <?php
            $nomPost = $_POST['nom'];
            $prenomPost = $_POST['prenom'];
        ?>
        <form action="index.php" method="POST">
            <p>Nom : <input type="text" name="nom" /></p>
            <p>Prenom : <input type="text" name="prenom" /></p>
            <p><input type="submit" value="Envoyez"></p>
        </form>
    <h3>exo 3</h3>
        <?php
            echo "$nomGet  $prenomGet";
        ?>
    <h3>exo 4</h3>
        <?php
            echo "$nomPost $prenomPost"
        ?>
    <h3>exo 5</h3>
        <?php
            $nomDeroulant = $_POST['nom'];
            $prenomDeroulant = $_POST['prenom'];
            $genreDeroulant = $_POST['genre'];
            echo $genreDeroulant." ".$nomDeroulant." ".$prenomDeroulant;
        ?>
        <form action="index.php" method="POST">
            <p>Genre : <select name="genre" size="1"><option selected>Mr<option>Mme</select></p>
            <p>Nom : <input type="text" name="nom" /></p>
            <p>Prenom : <input type="text" name="prenom" /></p>
            <p><input type="submit" value="Envoyez"></p>
        </form>
    <h3>exo 6</h3>
        <?php
        $nomDeroulant = $_POST['nom'];
        $prenomDeroulant = $_POST['prenom'];
        $genreDeroulant = $_POST['genre'];

        if ((empty($nomDeroulant))&&(empty($prenomDeroulant)))
            echo "<form action='index.php' method='POST'>
            <p>Genre : <select name='genre' size='1'><option selected>Mr<option>Mme</select></p>
            <p>Nom : <input type='text' name='nom' /></p>
            <p>Prenom : <input type='text' name='prenom' /></p>
            <p><input type='submit' value='Envoyez'></p>
            </form>";
        else
            echo $genreDeroulant." ".$nomDeroulant." ".$prenomDeroulant;
        ?>
    <h3>exo 7</h3>
        <?php
            $nomDeroulant = $_POST['nom'];
            $prenomDeroulant = $_POST['prenom'];
            $fichier = $_POST['fichier'];
            $genreDeroulant = $_POST['genre'];
        
            if ((empty($nomDeroulant))&&(empty($prenomDeroulant))&&(empty($fichier)))
                echo "<form action='index.php' method='POST'>
                <p>Genre : <select name='genre' size='1'><option selected>Mr<option>Mme</select></p>
                <p>Nom : <input type='text' name='nom' /></p>
                <p>Prenom : <input type='text' name='prenom' /></p>
                <p>Fichier : <input type='file' name='fichier'/>
                <p><input type='submit' value='Envoyez'></p>
                </form>";
            else
                echo "<p>".$genreDeroulant." ".$nomDeroulant." ".$prenomDeroulant."</p>
                <p>". $fichier. "</p>";
        ?>
    <h3>exo 8</h3>
        <?php
            $extension = $_FILES['fichier'];
            $nomDeroulant = $_POST['nom'];
            $prenomDeroulant = $_POST['prenom'];
            $fichier = $_POST['fichier'];
            $genreDeroulant = $_POST['genre'];
        
            if ((empty($nomDeroulant))&&(empty($prenomDeroulant))&&(empty($fichier)))
                echo "<form action='index.php' method='POST'>
                <p>Genre : <select name='genre' size='1'><option selected>Mr<option>Mme</select></p>
                <p>Nom : <input type='text' name='nom' /></p>
                <p>Prenom : <input type='text' name='prenom' /></p>
                <p>Fichier : <input type='file' name='fichier'/>
                <p><input type='submit' value='Envoyez'></p>
                </form>";
            elseif ($extension != '%pdf')
                echo "<form action='index.php' method='POST'>
                <p>Genre : <select name='genre' size='1'><option selected>Mr<option>Mme</select></p>
                <p>Nom : <input type='text' name='nom' /></p>
                <p>Prenom : <input type='text' name='prenom' /></p>
                <p>Fichier ( se n'est pas un fichier '.pdf' ) : <input type='file' name='fichier'/>
                <p><input type='submit' value='Envoyez'></p>
                </form>";
            else
                echo "<p>".$genreDeroulant." ".$nomDeroulant." ".$prenomDeroulant."</p>
                <p>". $fichier. "</p>";
        ?>
</section>
<section class="superglobales">
    <h2>Les Variables superglobales, sessions et cookies</h2>
    <h3>exo 1</h3>
        <?php
            $user = $_SERVER['HTTP_USER_AGENT'];
            $ip = $_SERVER['SERVER_ADDR'];
            $serv = $_SERVER['SERVER_NAME'];

            echo "<p>$user</p><p>$ip</p><p>$serv</p>";
            /*
                $indicesServer = array('PHP_SELF', 
            'argv', 
            'argc', 
            'GATEWAY_INTERFACE', 
            'SERVER_ADDR', 
            'SERVER_NAME', 
            'SERVER_SOFTWARE', 
            'SERVER_PROTOCOL', 
            'REQUEST_METHOD', 
            'REQUEST_TIME', 
            'REQUEST_TIME_FLOAT', 
            'QUERY_STRING', 
            'DOCUMENT_ROOT', 
            'HTTP_ACCEPT', 
            'HTTP_ACCEPT_CHARSET', 
            'HTTP_ACCEPT_ENCODING', 
            'HTTP_ACCEPT_LANGUAGE', 
            'HTTP_CONNECTION', 
            'HTTP_HOST', 
            'HTTP_REFERER', 
            'HTTP_USER_AGENT', 
            'HTTPS', 
            'REMOTE_ADDR', 
            'REMOTE_HOST', 
            'REMOTE_PORT', 
            'REMOTE_USER', 
            'REDIRECT_REMOTE_USER', 
            'SCRIPT_FILENAME', 
            'SERVER_ADMIN', 
            'SERVER_PORT', 
            'SERVER_SIGNATURE', 
            'PATH_TRANSLATED', 
            'SCRIPT_NAME', 
            'REQUEST_URI', 
            'PHP_AUTH_DIGEST', 
            'PHP_AUTH_USER', 
            'PHP_AUTH_PW', 
            'AUTH_TYPE', 
            'PATH_INFO', 
            'ORIG_PATH_INFO') ; 
            
            echo '<table cellpadding="10">' ; 
            foreach ($indicesServer as $arg) { 
                if (isset($_SERVER[$arg])) { 
                    echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
                } 
                else { 
                    echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
                } 
            } 
            echo '</table>' ; 
            */
        ?>
    <h3>exo 2</h3>
        <?php
            //echo $_SESSION["nom"]." ".$_SESSION["prenom"]." ".$_SESSION["age"];
            echo "<form action='user.php'>
            <p><input type='submit' value='Envoyez'></p>
            </form>"
        ?>
        <!-- <form action='user.php'>
            <p><input type='submit' value='Envoyez'></p>
        </form> -->
    <h3>exo 3</h3>
        <?php
            echo '<p>Entrez vos logs</p>';
            echo '<p><form action="#" method="post"></p>';
            echo '<p>Votre nom : <input type = "texte" name = "pseudo"><p/>';
            echo '<p>Votre mdp : <input type = "password" name = "mdp"></p>';
            echo '<p><input type = "submit" value = "Envoyer"></p>';

            if(isset($_COOKIE['pseudo'])&&isset($_COOKIE['mdp'])) {
                echo "<p>".$_COOKIE['pseudo']."</p>"; 
                echo "<p>".$_COOKIE['mdp']."</p>";
            }
        ?>
    <h3>exo 4</h3>
        <p><a href="user.php">allez pages deux</a></p>
    <h3>exo 5</h3>
        <p>Voir pages User.php</p>
        <?php
        ?>
</section>
<section class="dates">
    <h2>Les dates</h2>
    <h3>exo 1</h3>
        <?php
            echo date('d/m/o');
        ?>
    <h3>exo 2</h3>
        <?php
            echo date ('d-m-y');
        ?>
    <h3>exo 3</h3>
        <?php
            setlocale (LC_TIME, 'fr_FR.utf8','fra');
            //echo date("D d F o");
            echo strftime("%A %d %B %Y")
        ?>
    <h3>exo 4</h3>
        <?php
            echo mktime(15, 00, 00, 05, 16, 2016);
            // $time = time("");
            // echo("<p>$time</p>");
            // echo(date("Y-m-d",$time));

        ?>
    <h3>exo 5</h3>
        <?php
            $anciennedate = "16-05-2016";
            $datedujour = date("d-m-Y");
            $jmoins = ((strtotime($datedujour)) - strtotime($anciennedate));
            $jmoins = round($jmoins / (60*60*24)); 
            echo "La différence entre les 2 dates est de $jmoins jours";
        ?>
    <h3>exo 6</h3>
        <?php
            $mois = mktime( 00, 00, 00, 02, 01, 2017 ); 
            echo "Le mois de ".date("F Y",$mois)." possède ".date("t",$mois)." jours";
        ?>
    <h3>exo 7</h3>
        <?php
            $date_debut = date("d-m-Y");
            $date_fin = date('d-m-Y', strtotime($date_debut.' +20 days'));
            echo $date_fin;
        ?>
    <h3>exo 8</h3>
        <?php
            $date_debut = date("d-m-Y");
            $date_fin = date('d-m-Y', strtotime($date_debut.' -22 days'));
            echo $date_fin;
        ?>
    <h3>Tp calendrier</h3>
        <form action="index.php" method="POST">
            <p>Mois : <select name="mois" size="1">
                <option selected>janvier
                <option>fevrier
                <option>Mars
                <option>Avril
                <option>Mai
                <option>Juin
                <option>Juillet
                <option>Aout
                <option>Septembre
                <option>Octobre
                <option>Novembre
                <option>Decembre
                </select></p>
            <p><input type="submit" value="Envoyez"></p>
        </form>
</section>
<section class="calculatrice">
    <h3>Calculatrice PHP</h3>
        <h2>If / Else</h2>
            <?php
                $nombreUn = $_POST['nombreUn'];
                $nombreDeux = $_POST['nombreDeux'];
                $signe = $_POST['signe'];
                // action='index.php'
                echo "<form method='POST'>
                    <input type='text' name='nombreUn' />
                    <select name='signe' size='1'><option selected>+<option>-<option>x<option>/</select>
                    <input type='text' name='nombreDeux' />
                    <input type='submit' value='Calculer'>
                    </form>";
                if (empty($_POST['nombreUn'])||empty($_POST['nombreDeux'])){
                    echo "Veuillez entrez des valeurs";
                }
                elseif ($signe == "+"){
                    $calcule = ( $nombreUn + $nombreDeux );
                    $message = $nombreUn." ".$signe." ".$nombreDeux." = ".$calcule;
                    echo "<script>alert('$message');</script>";
                }
                elseif ($signe == "-"){
                    $calcule = ( $nombreUn - $nombreDeux );
                    $message = $nombreUn." ".$signe." ".$nombreDeux." = ".$calcule;
                    echo "<script>alert('$message')</script>";
                }
                elseif ($signe == "x"){
                    $calcule = ( $nombreUn * $nombreDeux );
                    $message = $nombreUn." ".$signe." ".$nombreDeux." = ".$calcule;
                    echo "<script>alert('$message')</script>";
                }
                elseif ($signe == "/"){
                    $calcule = ( $nombreUn / $nombreDeux );
                    $message = $nombreUn." ".$signe." ".$nombreDeux." = ".$calcule;
                    echo "<script>alert('$message')</script>";
                }
            ?>
        <h2>Switch</h2>
            <?php
                $nombreUnSwitch = $_POST['nombreUnSwitch'];
                $nombreDeuxSwitch = $_POST['nombreDeuxSwitch'];
                $signeSwitch = $_POST['signeSwitch'];

                echo "<form method='POST'>
                <input type='text' name='nombreUnSwitch' />
                <select name='signeSwitch' size='1'><option selected>+<option>-<option>x<option>/</select>
                <input type='text' name='nombreDeuxSwitch' />
                <input type='submit' value='Calculer'>
                </form>";

                switch($signeSwitch){
                    case "+";
                        $calcule = ( $nombreUnSwitch + $nombreDeuxSwitch );
                        echo  $nombreUnSwitch." ".$signeSwitch." ".$nombreDeuxSwitch." = ".$calcule;
                        break;
                    case "-";
                        $calcule = ( $nombreUnSwitch - $nombreDeuxSwitch );
                        echo  $nombreUnSwitch." ".$signeSwitch." ".$nombreDeuxSwitch." = ".$calcule;
                        break;
                    case "x";
                        $calcule = ( $nombreUnSwitch * $nombreDeuxSwitch );
                        echo  $nombreUnSwitch." ".$signeSwitch." ".$nombreDeuxSwitch." = ".$calcule;
                        break;
                    case "/";
                        $calcule = ( $nombreUnSwitch / $nombreDeuxSwitch );
                        echo $nombreUnSwitch." ".$signeSwitch." ".$nombreDeuxSwitch." = ".$calcule;
                        break;
                }
            ?>
        <h2>Fonction</h2>
            <?php
                echo "<form>
                    <input type='text' name='nombreUnFunction' />
                    <select name='signeFunction' size='1'><option selected>+<option>-<option>x<option>/</select>
                    <input type='text' name='nombreDeuxFunction' />
                    <input type='submit' value='Calculer'>
                    </form>";

                function calculeFunction($signeFunction , $nombreDeuxFunction , $nombreUnFunction){
                    if (empty($_POST['nombreUnFunction'])||empty($_POST['nombreDeuxFunction'])){
                        return "Veuillez entrez des valeurs";
                    }
                    elseif ($signeFunction == "+"){
                        $calculeFunction = ( $nombreUnFunction + $nombreDeuxFunction );
                        return $nombreUnFunction." ".$signeFunction." ".$nombreDeuxFunction." = ".$calculeFunction;
                    }
                    elseif ($signeFunction == "-"){
                        $calculeFunction = ( $nombreUnFunction - $nombreDeuxFunction );
                        return $nombreUnFunction." ".$signeFunction." ".$nombreDeuxFunction." = ".$calculeFunction;
                    }
                    elseif ($signeFunction == "x"){
                        $calculeFunction = ( $nombreUnFunction * $nombreDeuxFunction );
                        return $nombreUnFunction." ".$signeFunction." ".$nombreDeuxFunction." = ".$calculeFunction;
                    }
                    elseif ($signeFunction == "/"){
                        $calculeFunction = ( $nombreUnFunction / $nombreDeuxFunction );
                        return $nombreUnFunction." ".$signeFunction." ".$nombreDeuxFunction." = ".$calculeFunction;
                    }
                }
                echo calculeFunction($nombreUnFunction = $_POST['nombreUnFunction'],$nombreDeuxFunction = $_POST['nombreDeuxFunction'],$signeFunction = $_POST['signeFunction']);
            ?>
</section>
</body>
</html>