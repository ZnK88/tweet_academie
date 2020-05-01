<?php
require("bdd.php");

$idToScroll=$_GET["idToScroll"];

$bdd = new BDD();
$reponse = $bdd->scroll_update($idToScroll);

echo $reponse;

?>