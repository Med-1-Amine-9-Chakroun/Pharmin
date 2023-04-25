<?php
function login ($bdd, $username, $password){
    $requete="SELECT * FROM adminn 
    WHERE username = $username
    AND pass = $password";
    $reponse=$bdd->query($requete) or die ($bdd->errorInfo()[2]);
    if ($reponse->rowCount()>0){
        header("location: ../HTML/stock-mang.php?c=1");
    }
    else{
        header("location: ../index.php?err=Incorrect username ot password"); 
    }
}   
if (isset($_POST['login-btn'])){
    include("DbConnexion.php");

    $bdd = maConnexion();

    if(isset($_POST['username']) && !empty($_POST['username']))
        $username=$bdd->quote($_POST['username']);
    else 
        header("location: ../index.php?err=Please fill all the fields");  
    if(isset($_POST['password']) && !empty($_POST['password']))
        $password=$bdd->quote($_POST['password']);
    else 
        header("location: ../index.php?err=Please fill all the fields");   

    login($bdd, $username, $password);
}

?>