<?php
require("bdd.php");


if(isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['birthday']))
{
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];

    $bdd = new BDD();
    $reponse = $bdd->inscription($username, $mail, $password, $birthday);
    echo $reponse;

}
else
{
    echo "Votre accées n'est pas autorisé";
}
?>