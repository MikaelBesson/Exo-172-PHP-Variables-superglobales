<?php
session_start();
echo $_SERVER['HTTP_USER_AGENT'].'<br>';
echo $_SERVER['SERVER_ADDR'].'<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';


$_SESSION["nom"] = "Groot";
$_SESSION["prenom"] = "je s'apl ";
$_SESSION["age"] = 43;

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="monCSS/style.css">
    <link rel="stylesheet" href="pages/page1.php">
    <title>index</title>
</head>
<body>
    <a href="pages/page1.php">info utilisateur</a>
    <div id="container">
        <form action="pages/page2.php" method="post">
            <input type="text" name="loggin" id="userLog" placeholder="Votre nom">
            <input type="password" name="password" id="userPass" placeholder="Votre mot de passe" maxlength="15">
            <input type="submit" name="Envoyer" id="submit">
        </form>
    </div>
    <a href="pages/page3.php">moddification du cookies</a>


</body>
</html>






