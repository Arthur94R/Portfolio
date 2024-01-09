<?php
    // conexion à la BDD
   
function connect(){
    try
    {
        $connect = new PDO('mysql:host=localhost;dbname=bonbons','root','root');
    }
    catch (PDOException $e)
    {
        echo "problème de connexion à la BDD <br>". $e->getMessage();
    }
    return $connect;
}

?>