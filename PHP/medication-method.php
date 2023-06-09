<?php 

function liste_medic($bdd){
    $requete = "SELECT * FROM medication WHERE statee = 1 and quantity > 0 and expiration_date >= NOW()";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}


function liste_medic_o_o_s($bdd){
    $requete = "SELECT * FROM medication WHERE  quantity <= 0 ";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}


function liste_medic_expired($bdd){
    $requete = "SELECT * FROM medication WHERE  expiration_date <= NOW() ";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}



function liste_medic_name($bdd, $name){
    $requete = "SELECT * FROM medication WHERE statee = 1 AND medic_name = '$name' and quantity > 0 and expiration_date >= NOW()" ;
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);    
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}

function liste_medic_code($bdd, $code){
    $requete = "SELECT * FROM medication WHERE statee = 1 AND medic_code = '$code' and quantity > 0 and expiration_date >= NOW()";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}

function liste_medic_type($bdd, $type){
    $requete = "SELECT * FROM medication WHERE statee = 1 AND medic_type = '$type' and quantity > 0 and expiration_date >= NOW()";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}


function liste_medic_id($bdd, $id){
    $requete = "SELECT * FROM medication WHERE statee = 1 AND medic_id = '$id' and quantity > 0 and expiration_date >= NOW()";
    $response = $bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($response->rowCount()>0){
        return $response;
    }
    else{
        return "No elements found";
    }
}

function add_medic($bdd, $name, $code, $type, $date, $units, $quantity){
    $sql="INSERT INTO medication (medic_name, medic_code, medic_type, expiration_date, units, quantity, statee) 
    VALUES($name,$code,$type,$date,$units,$quantity, 1)";
    $nblignes=$bdd->exec($sql);
    if($nblignes!=1)
    header("location: ../HTML/medic-mang.php?err=Unable to perform the request!");   
    else{
        header("location: ../HTML/medic-mang.php");   
    }
}

if (isset($_POST['add'])){
    include('../PHP/DbConnexion.php');
    $bdd = maConnexion();
    
        if(isset($_POST['name']) && !empty($_POST['name']))
        //quote pour proteger data
            $name=$bdd->quote($_POST['name']);
        else {
            header("location: ../HTML/medic-mang.php?err=Please fill all the fields");   
        }
            
            
    
        if(isset($_POST['code']) && !empty($_POST['code']))
            //quote pour proteger data
            $code=$bdd->quote($_POST['code']);
        else {
            header("location: ../HTML/medic-mang.php?err=Please fill all the fields");   
            }
        if(isset($_POST['type']) && !empty($_POST['type']))
                //quote pour proteger data
            $type=$bdd->quote($_POST['type']);
        else {
            header("location: ../HTML/medic-mang.php?err=Please fill all the fields");   
        }
        if(isset($_POST['date']) && !empty($_POST['date']))
            //quote pour proteger data
            $date=$bdd->quote($_POST['date']);
        else {
            header("location: ../HTML/medic-mang.php?err=Please fill all the fields");   
        }    
       
        if(isset($_POST['units']) && !empty($_POST['units']))
            //quote pour proteger data
            $units=$bdd->quote($_POST['units']);
        else {
            header("location: ../HTML/medic-mang.php?err=Please fill all the fields");   
        }
        if(isset($_POST['quantity']) && !empty($_POST['quantity']))
            //quote pour proteger data
            $quantity=$bdd->quote($_POST['quantity']);
            else {
                header("location: ../HTML/medic-mang.php?err=Please fill all the fields");   
            }
    add_medic($bdd, $name, $code, $type, $date, $units, $quantity);
}  
if (isset($_POST["search-btn"])){
    if(isset($_POST['critere']) && !empty($_POST['critere'])){
        $par = $_POST['opt']."/".$_POST['critere'];
        header("location: ../HTML/medic-mang.php?cri=$par"); 
    }
    else {
        header("location: ../HTML/medic-mang.php?errcri=Please Type SomeThing");   
    }
}

if (isset($_POST['btn_sup'])){
    require_once('../PHP/DbConnexion.php');
    $bdd = maConnexion(); 
    //quote pour proteger les caractere spéciaux
    $id=$bdd->quote($_POST['btn_sup']);
    $sql = "DELETE FROM medication WHERE medic_id=$id";
    $nblignes=$bdd->exec($sql);
}
?>