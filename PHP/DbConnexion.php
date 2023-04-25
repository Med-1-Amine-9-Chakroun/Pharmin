<?php
//creer une instance du classe pdo et connecter au serveur
//$bdd identifiant de la connection
function maConnexion(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=pharmin','root','');
        $bdd->query("SET NAMES 'utf8'");
        return $bdd;
    }catch (PDOException $e){    
        die('Erreur:'.$e->getMessage());
    }
}

?>