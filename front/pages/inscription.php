<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <title>Tweet Academie</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../styles/normalize.css">
  <link rel="stylesheet" href="../styles/skeleton.css">
  <link rel="stylesheet" href="../styles/style_inscription.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="../../back/modules/inscription.js"></script>
  <link rel="icon" type="image/png" href="../../images/twitter.png">

</head>

<body>
  <?php
      session_start();
  ?>

  <div class="container">
    <div id="center" class="row">
      <div class="seven columns" style="margin-top:15%">
        <div id="logo">		  
          <img src="../../images/twitter.png"/>
        </div>
      </div>
      <div class="five columns" style="margin-top:15%">
        <div id="connexion">
  

          
          <h2>Créer votre compte</h2>
        
          <form>
            <div><label class="label_inscr">Nom d'utilisateur : </label><input id="username" type="text" name="username" class="champ"></div>
            <div><label class="label_inscr">E-mail : </label><input id="mail" type="text" name="mail" class="champ"></div>
            <div><label class="label_inscr">Date de naissance : </label><input id="birthday" type="date" name="birthday" class="date"></div>
            <div><label class="label_inscr">Mot de passe : </label><input id="password" type="text" name="password" class="champ"></div>
            <div><label class="label_inscr">Confirmer mot de passe : </label><input id="password2" type="text" name="password" class="champ"></div>
            <div id="button"><input id="subscribe" type="submit" value="S'inscrire" class="button"></div>
          </form>
          
          <div id="button"><a href="connexion.php"><input id="submit" type="submit" value="Se connecter" class="button"></a></div>

        </div>
      </div>
    </div>
  </div>

</body>
</html>
