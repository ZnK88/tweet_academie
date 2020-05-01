<?php

require("bdd.php");

session_start();

$id= $_SESSION['idUser'];
$tweet=$_POST['tweet'];

$bdd = new BDD();
$reponse = $bdd->pushtweet($id,$tweet);



?>