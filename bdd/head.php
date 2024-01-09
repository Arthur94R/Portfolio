<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BDD bonbons</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="index.php">Candy Shop</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="ajout.php">
                                    <a class="nav-link text-white" href="ajout.php">Ajout de produit</a>
                                </form>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="admin.php">
                                    <a class="nav-link text-white" href="admin.php">Admin</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <form class="d-flex" role="search" action="recherche.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search" name="recherche">
                        <button class="btn btn-outline-danger" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
        </header>

<?php
// connexion à la BDD
    require "connect.php" ;
    $bdd = connect() ; ?>