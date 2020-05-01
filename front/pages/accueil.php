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
    <link rel="stylesheet" href="../styles/style_accueil.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="../../back/modules/accueil.js"></script>
    <link rel="icon" type="image/png" href="../../images/twitter.png">
    <script src="../../back/modules/account_style.js"></script>

</head>

<body>

  <?php
      session_start();
      include "../parts/barre_recherche.php";
  ?>

<div class="container">
    
    <div class="row">

        <div id="menu" class="three columns">
            <div id="param">
                <a href="accueil.php">Accueil</a>
                <a href="#">Explorer</a>
                <a href="#">Notifications</a>
                <a href="#">Messages</a>
                <a id='profil' href="profil.php">Profil</a>
                <a href="parametre.php">Paramètres</a>
            </div>
        </div>

        <div id="flux" class="six columns">

            <div id="Zonestatus">
        
                <div id="photostatuszone">

                    <div id="photostatus">

                    </div>

                    <div id="status">
                        <div id="statusedit" contenteditable="true" data-text="Quoi de neuf ?">

                        </div>

                        <div id="navstatus">
                            <button class="u-pull-right" id="pushtweet">Tweeter</button>
                        </div>

                    </div>

                </div>

                <div id="fluxdirect">


                </div>
            </div>
    
        </div>


        <div id="tendance" class="three columns">
            <h3>Tendance</h3>
            <a href="#">#Poisson</a>
            <p>10.0K Tweets</p>
            <a href="#">#Chat</a>
            <p>500 Tweets</p>
        </div>
    </div>

</body>
</html>
