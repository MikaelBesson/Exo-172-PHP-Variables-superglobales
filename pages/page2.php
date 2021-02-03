<?php


foreach ($_COOKIE as $cookieName => $cookiesValue){
    echo "$cookieName => $cookiesValue<br>";
    $cookie1 = $_COOKIE["loggin"];
    $cookie2 = $_COOKIE["password"];
    echo "loggin : ".$cookie1."<br>";
    echo "password : ".$cookie2."<br>";
}
echo "<a href='../index.php'>retour index</a>";
