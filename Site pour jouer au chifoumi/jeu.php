<?php session_start(); ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page réponse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php
        
        $jeu = $_GET["chifoumi"];
        $images=["pierre" , "feuille", "ciseaux"];
        $i=rand(0,2);
        $choix0=$images[$i];
    ?>
    <h1>Le gagnant est... :</h1>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 18rem;">
                <?php echo "<img src='$jeu.png' class='card-img-top'>" ;?>
                <div class="card-body">
                    <h5 class="card-title">Résultat du joueur</h5>
                </div>
            </div>
        </div>    
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 18rem;">
                <?php echo "<img src='$choix0.png' class='card-img-top'>" ;?>
                <div class="card-body">
                    <h5 class="card-title">Résultat de l'ordinateur</h5>
                </div>
            </div>
        </div>
    </div>

    <?php
        if ($jeu == "pierre" && $choix0 == "pierre"){
            echo "<div class='alert alert-warning' role='alert'>Personne n'a gagné !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "feuille" && $choix0 == "pierre"){
            $_SESSION["joueur"]++ ;
            echo "<div class='alert alert-success' role='alert'>Tu as gagné !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "ciseaux" && $choix0 == "pierre"){
            $_SESSION["ordi"]++ ;
            echo "<div class='alert alert-danger' role='alert'>Tu as perdu !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "pierre" && $choix0 == "feuille"){
            $_SESSION["ordi"]++ ;
            echo "<div class='alert alert-danger' role='alert'>Tu as perdu !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "feuille" && $choix0 == "feuille"){
            echo "<div class='alert alert-warning' role='alert'>Personne n'a gagné !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "ciseaux" && $choix0 == "feuille"){
            $_SESSION["joueur"]++ ;
            echo "<div class='alert alert-success' role='alert'>Tu as gagné !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "pierre" && $choix0 == "ciseaux"){
            $_SESSION["joueur"]++ ;
            echo "<div class='alert alert-success' role='alert'>Tu as gagné !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "feuille" && $choix0 == "ciseaux"){
            $_SESSION["ordi"]++ ;
            echo "<div class='alert alert-danger' role='alert'>Tu as perdu !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
        if ($jeu == "ciseaux" && $choix0 == "ciseaux"){
            echo "<div class='alert alert-warning' role='alert'>Personne n'a gagné !</div>" ;
            echo $_SESSION["joueur"];
            echo "<br>" . $_SESSION["ordi"];
        }
    ?>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="index.php" class="btn btn-primary">Rejouer</a>
    </div>
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="fin.php" class="btn btn-primary">Recommencer les points à 0</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>