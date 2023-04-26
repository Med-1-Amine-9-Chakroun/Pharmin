<?php  
include('../PHP/package-method.php');
include('../PHP/DbConnexion.php');
$bdd = maConnexion();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Packaging Material</title>
        <link rel="stylesheet" href="../CSS/style-nav-bar.css">
        <link rel="stylesheet" href="../CSS/pack-mang-style.css">

        <link rel="icon" href="../images/pills.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    </head>
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
                    <a href="../index.php"><button type="button" name="logout"><i class="fa-solid fa-right-from-bracket"></i></button>                                          </a>

                      
                </div>
            </nav>
            <article>
                <div class="article-left">
                    <div class="article-left-head">
                        <h1>Add A Packaging Material</h1>
                    </div>    
                    <form action="" method="post">
                        <label for="name">Name :</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" >
                        <label for="desc">Description :</label>
                        <input type="text" id="desc" name="desc" placeholder="Enter Description" >
                        <label for="quantity">Quantity :</label>
                        <input type="text" id="quantity" name="quantity" placeholder="Enter Quantity" >
                        <p class="error-msg"  id="error-msg"><?php if (isset($_GET['err'])){ echo $_GET['err'];} ?></p>
                        <button type="submit" name="add-btn" class="add-btn">ADD</button>                        
                    </form>                
                </div>
                <div class="article-right">
                    <div class="article-right-head">
                        <h1>List Of Medications</h1>
                    </div>
                    <div class="article-right-search">
                        <p class="error-msg-search"></p>
                        <form action="" method="post">
                            <label for="felt-opt">Filtering :</label>
                            <input type="text" placeholder="Type something">
                            <button type="submit" id="search-btn" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>                            
                        </form>
                    </div>
                    <div class="article-right-table">
                        <table>
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
                                        echo "<tr id='$enregistrement->pack_id'>";
                                        echo "<td> $enregistrement->pack_name</td>";
                                        echo "<td> $enregistrement->pack_desc</td>";
                                        echo "<td> $enregistrement->pack_quantity</td>";
                                        echo "<th> <i class='fa-solid fa-circle-plus' style='color: #2d2e2f;'></i></th>";
                                        echo "</tr>";
                                    }
                                }
                            ?>  
                        </table>
                    </div>                
                </div>
            </article>
        </section>        
        <footer></footer>
    </body>
</html>