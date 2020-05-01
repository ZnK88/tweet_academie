<?php
require("bdd.php");

$email=$_GET['email'];

$bdd = new BDD();
$reponse = $bdd->verification_email($email);

echo $reponse;

?>