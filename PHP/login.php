<?php
function login ($bdd, $username, $password){
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $password;
    echo "<br>";
    $requete="SELECT * FROM adminn 
    WHERE username = $username
    AND pass = $password";
    echo"gtgsst";
    echo "<br>";
    $reponse=$bdd->query($requete) or die ($bdd->errorInfo()[2]);
    echo $reponse->rowCount();
    echo "<br>";
    if ($reponse->rowCount()>0){
        header("location: ../HTML/stock-mang.php");
    }
    else{
        header("location: ../index.php?err=Incorrect username ot password"); 
    }
    echo"hihih";
}   
if (isset($_POST['login-btn'])){
    include("DbConnexion.php");
    echo"hihkkkkih";
    $bdd = maConnexion();

    if(isset($_POST['username']) && !empty($_POST['username']))
        $username=$bdd->quote($_POST['username']);
    else 
    header("location: ../index.php?err=Please fill all the fields");  
    if(isset($_POST['password']) && !empty($_POST['password']))
        $password=$bdd->quote($_POST['password']);
    else 
    header("location: ../index.php?err=Please fill all the fields");   
        
    echo $_POST['username'];
    echo $_POST['password'];
   
    login($bdd, $username, $password);
    echo"hihih";
}

?>