<?php 
function liste_package($bdd){
    $requete = "SELECT * FROM package WHERE pack_quantity > 0";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
} 

function liste_package_o_o_s($bdd){
    $requete = "SELECT * FROM package WHERE pack_quantity <= 0";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
} 

function liste_package_name($bdd, $name){
    $requete = "SELECT * FROM package WHERE pack_name = $name and pack_quantity > 0";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}   

function liste_pack_id($bdd, $id){
    $requete = "SELECT * FROM package  AND pack_id = '$id'";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}

function add_package($bdd, $name, $desc, $quantity){
    $sql="INSERT INTO package (pack_name, pack_desc, pack_quantity) 
    VALUES($name,$desc,$quantity)";
    $nblignes=$bdd->exec($sql);
    if($nblignes!=1)
    header("location: ../HTML/pack-mang.php?err=Unable to perform the request!");   
    else{
        header("location: ../HTML/pack-mang.php");   
    }
}

if (isset($_POST['add-btn'])){
    include('../PHP/DbConnexion.php');
$bdd = maConnexion();
    if(isset($_POST['name']) && !empty($_POST['name']))
    //quote pour proteger data
        $name=$bdd->quote($_POST['name']);
    else {
        header("location: ../HTML/pack-mang.php?err=Please fill all the fields");   
    }
    if(isset($_POST['desc']) && !empty($_POST['desc']))
    //quote pour proteger data
        $desc=$bdd->quote($_POST['desc']);
    else {
        header("location: ../HTML/pack-mang.php?err=Please fill all the fields");   
    }
    if(isset($_POST['quantity']) && !empty($_POST['quantity']))
    //quote pour proteger data
        $quantity=$bdd->quote($_POST['quantity']);
    else {
        header("location: ../HTML/pack-mang.php?err=Please fill all the fields");   
    }
    add_package($bdd, $name, $desc, $quantity);
      
}

?>