<?php
include "head.php";

// requête
    $sql = "select * from produit" ;

// exécution de la requête
    $resultat = $bdd -> query($sql) ;

// affichage des résultats dans un objet
    while($produit = $resultat -> fetch(PDO::FETCH_OBJ)){ ?>
        <div class="card m-2 text-center" style="width: 18rem;">
            <img src="<?= $produit->photo ?>"class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $produit->nom ?></h5>
                <p class="card-text"><?= $produit->prix ?> €</p>
                <a href="#" class="btn btn-danger">Modifier</a>
                <a href="supprimer.php" name="id" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php 
    }
    ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>