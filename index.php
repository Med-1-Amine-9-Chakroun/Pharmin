<?php
include('PHP/login.php');
include('PHP/DbConnexion.php');
$bdd = maConnexion();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="stylesheet" href="CSS/style-index.css">
        <link rel="icon" href="images/pills.png">
    </head>
    <body>
        <div class="container">
            <div class="container-left">
                <div class="logo">
                    <img src="images/logo.png" alt="">
                </div>
                <hr class="hr1">
                <h1>Login</h1>
                <hr class="hr2">
                <form action="PHP/login.php" method="post">
                    <div class="form-comtainer">
                        <label for="username">User Name :</label><br>
                        <input type="text" placeholder="Enter your UserName" name="username" id="username">
                        <label for="Password">Password :</label><br>
                        <input type="password" placeholder="Enter your Password" name="password" id="Password"> 
                        <p class="error-msg"  id="error-msg"><?php if (isset($_GET['err'])){echo $_GET['err'];} ?></p>
                        <input type="submit" name="login-btn" class="login-btn" value="LOGIN">
                    </div>    
                </form>
                <a href="#"><p>Forgot Password ..!</p></a>
            </div>
            <div class="container-middle"></div>
            <div class="container-right">
                <img src="images/Medicament-pharmacie.jpg" alt="">
            </div>
        </div>
    </body>
</html>

