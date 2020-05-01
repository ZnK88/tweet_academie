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
  <link rel="stylesheet" href="../styles/style_connexion.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="../../back/modules/connexion.js"></script>
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
  

          
          <h2>Voir ce qui se passe actuellement dans le monde</h2>
        
          <form>
        
            <div><label class="label_conn">E-mail : </label><input id="mail" type="text" name="mail" class="champ"></div>
            <div><label class="label_conn">Mot de passe : </label><input id="password" type="text" name="password" class="champ"></div>
            <div><input id="submit" type="submit" value="Se connecter" class="button"></div>
          </form>
          <div><a href="inscription.php"><input href="inscription.html" id="subscribe" type="submit" value="S'inscrire" class="button"></a></div>
        
        </div>
      </div>
    </div>
  </div>

</body>
</html>
