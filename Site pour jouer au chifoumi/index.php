<?php
  session_start(); 
  if(!isset($_SESSION["ordi"])){
    $_SESSION["ordi"] = 0 ;
  }
  if(!isset($_SESSION["joueur"])){
    $_SESSION["joueur"] = 0 ;
  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page choix</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
      <h1>Jeu du Chifoumi : tentez votre chance face à l'ordinateur !</h1><br>
      <div class="card-group">
        <div class="card">
          <a href="jeu.php?chifoumi=pierre"><img src="pierre.png" class="card-img-top"></a>
          <div class="card-body">
            <h5 class="card-title">Pierre</h5>
          </div>
        </div>
        <div class="card">
          <a href="jeu.php?chifoumi=feuille"><img src="feuille.png" class="card-img-top"></a>
          <div class="card-body">
            <h5 class="card-title">Feuille</h5>
          </div>
        </div>
        <div class="card">
          <a href="jeu.php?chifoumi=ciseaux"><img src="ciseaux.png" class="card-img-top"></a>
          <div class="card-body">
            <h5 class="card-title">Ciseaux</h5>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>