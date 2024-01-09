<?php
    include "head.php";
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];
    $img = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"],"Images/".$img);
    try{
        $sql="INSERT INTO produit(nom,prix, photo) VALUES ('$nom','$prix', 'images/$img')";
        echo $sql ;
        $resultat = $bdd->exec($sql);
    }
    catch(PDOException $e){
        echo "Erreur dans la requête. <br>". $e-> getMessage();
    }
    header("location:index.php");
?>