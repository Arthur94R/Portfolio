<?php
    include "head.php";
?>
        <body>
            <form method="POST" action="insertion.php" enctype="multipart/form-data">
                <div class="mb-3 m-2">
                    <label for="Nom" class="form-label">Nom du produit</label>
                    <input class="form-control" type="text" id="Nom" name="nom">
                </div>
                <div class="mb-3 m-2">
                    <label for="Prix" class="form-label">Prix du produit</label>
                    <input class="form-control" type="text" id="Prix" name="prix">
                </div>
                <div class="mb-3 m-2">
                    <label for="formFile" class="form-label">Image du produit</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                <button type="submit" class="btn btn-danger m-2">Submit</button>
            </form>
        </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>