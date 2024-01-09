<?php
    session_start();

    $login = $_POST["login"];
    $mdp = md5($_POST["mdp"]);

    require "connect.php" ;
    $bdd = connect();

    $sql = "select * from admin WHERE login='$login' and mdp='$mdp'";

    $resultat = $bdd->query($sql);
    $res = $resultat->fetch(PDO::FETCH_OBJ);
    $nb_lignes = $resultat->rowCount();
    if ($nb_lignes == 0){
        header("Location:admin.php");
    }
    else {
        $_SESSION["admin"] = $rep->login;
        $_SESSION["autorisation"] = "OK";
        header("Location:admin2.php");
    }