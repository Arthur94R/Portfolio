<?php
    include "head.php";
?>

<body>
    <form method="POST" action="verif.php">
        <div class="mb-3 m-2">
            <label for="Nom" class="form-label">Identifiant</label>
            <input class="form-control" type="text" id="Nom" name="login">
        </div>
        <div class="mb-3 m-2">
            <label for="Prix" class="form-label">Mot de passe</label>
            <input class="form-control" type="password" id="Prix" name="mdp">
        </div>
        <button type="submit" class="btn btn-danger m-2">Connexion</button>
    </form>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>