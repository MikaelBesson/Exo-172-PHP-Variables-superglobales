<?php
session_start();
?>



<div id="container">
    <form action="page4.php" method="post">
        <input type="text" name="loggin" id="userLog" placeholder="mon nouveaux nom">
        <input type="password" name="password" id="userPass" placeholder="nouveaux mot de passe" maxlength="15">
        <input type="submit" name="Envoyer" id="submit">
    </form>
</div>
<?php

foreach($_POST as $newKey => $newValue){
setcookie($newKey, $newValue, time() + 7200,);
}
echo "new logging :" . $_POST["loggin"] ."<br>";
echo "new password : " . $_POST["password"] ."<br>";

echo "<a href='../index.php'>retour index</a>";

/* j'ai pas tout comprit */