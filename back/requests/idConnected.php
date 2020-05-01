<?php

require("bdd.php");

$bdd = new BDD();
$reponse = $bdd->idConnected();
echo $reponse;

?>
