<?php
require("bdd.php");

$bdd = new BDD();
$reponse = $bdd->actu_update();

echo $reponse;

?>