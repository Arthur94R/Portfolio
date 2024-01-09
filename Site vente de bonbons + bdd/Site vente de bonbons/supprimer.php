<?php
    include "head.php";
    $id=$_GET["id"];
    echo $id;
    $req="delete from produit whre id=$id";
    $resultat=$bdd->query($req);
    header("location:index.php");
?>