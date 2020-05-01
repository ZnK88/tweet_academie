<?php
require("bdd.php");

$username=$_GET['username'];

$bdd = new BDD();
$reponse = $bdd->verification_username($username);

echo $reponse;

?>