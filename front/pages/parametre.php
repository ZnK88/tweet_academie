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
  <link rel="stylesheet" href="../styles/style_profil.css">
  <link rel="stylesheet" href="../styles/style_parametre.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="../../back/modules/profil.js"></script>
  <link rel="icon" type="image/png" href="../../images/twitter.png">
  <script src="../../back/modules/account_style.js"></script>

</head>

<body>

<header>
  <div id="grille">
    <a href="../pages/accueil.php"><img src="../../images/twitter.png" id="logotwitter"/></a>
    <div id="barre" class="container">
      <div class="offset-by-nine.column" id="divrecherche">
        <div id="parametre">
          <h3>Paramètres</h3>
        </div>  
      </div>
    </div>
  </div>
</header>

  <div class="container">
    <div class="row">

      <div id="menu" class="three columns">
        <div id="param">
          <a href="accueil.php">Accueil</a>
          <a href="#">Explorer</a>
          <a href="#">Notifications</a>
          <a href="#">Messages</a>
          <a href="profil.php">Profil</a>
          <a href="parametre.php">Paramètres</a>
        </div>
      </div>

    <div id="center" class="seven columns">
      
      <div id="grille">
        <h4>Affichage</h4>
      </div>

      <h5>Arrière plan</h5>
      
      <div id="contenu">
        <form>
          <div id="gestion_theme">
            
            <div id="bouton_blanc">
              <input type="radio" id="blanc" name="theme" value="blanc">
              <label for="Theme1">Par défaut</label>
            </div>  

            <div id="bouton_bleu">
              <input type="radio" id="bleu" name="theme"  value="bleu">
              <label for="Theme2">Bleu foncé</label>
            </div>  

            <div id="bouton_noir">
              <input type="radio" id="noir" name="theme"  value="noir">
              <label for="Theme3">Noir</label>
            </div>
          
          </div>
        </form>
      </div>
    
    </div>
  </div>

</body>
</html>
