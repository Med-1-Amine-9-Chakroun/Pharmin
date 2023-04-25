<?php 
function liste_package($bdd){
    $requete = "SELECT * FROM package";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }

}   

?>