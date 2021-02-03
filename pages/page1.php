<?php
session_start();

echo "nom : ".$_SESSION["nom"]."<br>";
echo "prenom : ".$_SESSION["prenom"]."<br>";
echo "age : ".$_SESSION["age"]."<br>";
echo "<a href='../index.php'>retour index</a>";



