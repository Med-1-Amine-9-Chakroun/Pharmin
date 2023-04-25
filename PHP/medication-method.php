<?php 
function liste_medic($bdd){
    $requete = "SELECT * FROM medication WHERE state = 1";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }

}   

?>