<?php  
session_start(); 

if (isset($_SESSION['username'])){
require_once('../PHP/medication-method.php');
require_once('../PHP/package-method.php');
include('../PHP/invoce-method.php');
require_once('../PHP/DbConnexion.php');
$bdd = maConnexion();



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stock</title>
        <link rel="stylesheet" href="../CSS/style-nav-bar.css">
        <link rel="stylesheet" href="../CSS/alert-mang-style.css">
        <link rel="stylesheet" href="../CSS/stock-mang-style.css">

        <link rel="icon" href="../images/pills.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    </head>
    <script src="../JS/stock-mang.js"></script>
    <body>
        <section>
            <nav>
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                </div>
                <div class="links">
                    <ul>
                        <li>
                            <a href="medic-mang.php">Medication</a>
                        </li>
                        <li>
                            <a href="pack-mang.php">Packaging Material</a>
                        </li>
                        <li>
                            <a href="stock-mang.php">Invoice</a>
                        </li>                                    
                    </ul>
                </div>
                <div class="links-icons">
                    <ul>
                        <li><a href=""><i class="fa-solid fa-pills"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-warehouse"></i></a></li>
                        <li><a href=""><i class="fa-sharp fa-solid fa-box-archive"></i></a></li>
                    </ul>
                </div>
                <div class="alert-logout">
                    <div class="alert">
                        <a href="alert-interface.php">
                            <i id="alert-1" class="fa-solid fa-bell"></i>
                            <i id="alert-2" class="fa-solid fa-bell fa-shake"></i>
                        </a>
                    </div>                  
                    <a href="../logout.php"><button type="button" name="logout"><i class="fa-solid fa-right-from-bracket"></i></button>                                          </a>
                </div>
            </nav>
            <article>
                <div class="article-left">
                    <div class="article-left-head">
                        <h1>Medication </h1>
                    </div>
                    <div class="article-left-table">
                        <table>
                            <?php
                            
                                $list_medic = liste_medic($bdd);
                                if ($list_medic == "No elements found"){
                                    echo "
                                    <tr>
                                        <th> No elements found</th>
                                    </tr>
                                    ";
                                }
                                else{
                                    echo "<tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Type</th>                                            
                                            <th>Expiration date</th>
                                            <th>Stock</th>
                                            <th>Add</th>
                                        </tr>
                                    ";
                                    while($enregistrement=$list_medic->fetchObject()){
                                        $id = $enregistrement->medic_id."/med";
                                        echo "<tr id='$id'>";
                                        echo "<td> $enregistrement->medic_name</td>";
                                        echo "<td> $enregistrement->medic_code</td>";
                                        echo "<td> $enregistrement->medic_type</td>";
                                        echo "<td> $enregistrement->expiration_date</td>";
                                        echo "<td> $enregistrement->quantity</td>";
                                        echo "<th onclick='stockPackTab(this.parentNode)'><i class='fa-solid fa-circle-plus' style='color: #2d2e2f;'></i></th>";
                                        echo "</tr>";
                                    }
                                }
                                
                            ?>
                       
                        </table>
                    </div>
                    <div class="article-left-head-2">
                        <h1>Packaging Material</h1>
                    </div>
                    <div class="article-left-table">
                        <table id="package">
                            <?php 
                                $liste_package = liste_package($bdd);                                
                                if ($liste_package == "No elements found"){
                                    echo "
                                    <tr>
                                        <th> No elements found</th>
                                    </tr>
                                    ";
                                }
                                else{
                                    echo "
                                    <tr>
                                        <th>Name</th>                                
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Add</th>
                                    </tr>
                                    ";
                                    while($enregistrement=$liste_package->fetchObject()){
                                        $id = $enregistrement->pack_id."/package";
                                        echo "<tr id='$id'>";
                                        echo "<td> $enregistrement->pack_name</td>";
                                        echo "<td> $enregistrement->pack_desc</td>";
                                        echo "<td> $enregistrement->pack_quantity</td>";
                                        echo "<th onclick='stockPackTab(this.parentNode)'><i class='fa-solid fa-circle-plus' style='color: #2d2e2f;'></i></th>";
                                        echo "</tr>";
                                    }
                                }
                            ?>                        
                        </table>
                    </div>
                </div>
                <div class="article-right">
                    <div class="article-right-head">
                        <h1>Creating An Invoice</h1>
                    </div>
                    <form action="" method="post">
                        <label for="name">Medication Name :</label>
                        <input type="text" id="namemed" name="namemed" class="" placeholder="Enter Name" required readonly>
                        <label for="desc">Medication ID :</label>
                        <input type="text" id="idmed" name="idmed" class="" placeholder="Enter Code" required readonly>
                        <label for="quantity">Quantity :</label>
                        <input type="number" id="quantitymed" name="quantitymed" max = 0 class="" placeholder="Enter Quantity" required>
                        <label for="name">Package Name :</label>
                        <input type="text" id="namepack" name="namepack" class="" placeholder="Enter Name" required readonly> 
                        <label for="desc">Packege ID :</label>
                        <input type="text" id="idpack" name="idpack" class="" placeholder="Enter Code" required readonly>
                        <label for="quantity">Quantity :</label>
                        <input type="number" id="quantitypack" name="quantitypack" max = 0 class="" placeholder="Enter Quantity" required>
                        <p class="error-msg"  id="error-msg"></p>
                        <button type="submit" class="add-btn" name="add-btn-invc">ADD</button>                        
                    </form> 
                </div>
            </article>
        </section>
        
        <footer></footer>
    </body>
</html>

<?php 
}
else{
    header("location: ../index.php?"); 
}
?>