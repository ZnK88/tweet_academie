<?php
require("bdd.php");

$email=$_GET['email'];
$password=$_GET['password'];

$bdd = new BDD();
$reponse = $bdd->connexion($email,$password);
echo $reponse;
?>