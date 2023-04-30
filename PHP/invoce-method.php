<?php 

function createInvose($bdd, $idmed, $quantitymed, $idpack, $quantitypack){    

    
}
if (isset($_POST['add-btn-invc'])){
    require_once('DbConnexion.php');
    require_once('../PHP/medication-method.php');
    require_once('../PHP/package-method.php');
    $bdd = maConnexion();
    $idmed = $_POST['idmed'];
    
    $quantitymed = $_POST['quantitymed'];
    $idpack = $_POST['idpack'];
    $quantitypack = $_POST['quantitypack'];
    $requete_1="UPDATE medication SET quantity= quantity -$quantitymed WHERE medic_id=$idmed";
    $nblignes_1=$bdd->exec($requete_1);

    $requete_2="UPDATE package SET pack_quantity= pack_quantity - $quantitypack WHERE pack_id=$idpack";
    $nblignes_2=$bdd->exec($requete_2);
}
?>