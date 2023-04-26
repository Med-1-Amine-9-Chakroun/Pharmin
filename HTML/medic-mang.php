<?php  
include('../PHP/medication-method.php');
include('../PHP/DbConnexion.php');
$bdd = maConnexion();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medication</title>
        <link rel="stylesheet" href="../CSS/medic-mang-style.css">
        <link rel="stylesheet" href="../CSS/style-nav-bar.css">
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
                        <h1>Add Medication</h1>
                    </div>                    
                    <form Action="" method="post">
                        <div class="div-1">
                            <label for="medicName">Medication Name :</label>
                            <input type="text" placeholder="Enter Medication Name" name="name" id="medicName" required>
                            <label for="medicCode">Medication Code :</label>
                            <input type="text" placeholder="Enter Medication Code" name="code" id="medicCode" required>                             
                        </div>
                        <div class="div-2">
                            <label for="type">Medicine Type :</label>
                            <select name="type" id="type" required>
                                <option value="---">---</option>
                                <option value="Capsules">Capsules</option>
                                <option value="Liquids">Liquids</option>
                                <option value="Powders">Powders</option>
                                <option value="Topical gels and creams">Topical gels and creams</option>
                                <option value="Suppositories">Suppositories</option>
                                <option value="Inhalers">Inhalers</option>
                                <option value="Injectables">Injectables</option>
                            </select>  
                            <label for="date">Expiration date :</label>    
                            <input type="date" name="date" id="date" required> 
                        </div>
                        
                        <div class="article-left-quantity">
                            <div class="article-left-quantity-units">
                                <label for="units">Units :</label>
                                <select name="units" id="units" required>
                                    <option value="---">---</option>
                                    <option value="Milliliters">Milliliters</option>
                                    <option value="Milligrams">Milligrams</option>
                                    <option value="Units">Units</option>
                                </select>
                            </div>
                            <div class="article-left-quantity-value">
                                <label for="quantity">Quantity :</label>
                                <input type="text" placeholder="Enter Quantity" name="quantity" id="quantity" required>                                                         
                            </div>
                        </div>      
                        <div class="div-3">                            
                            <input type="submit" name="add" class="add-btn" value="ADD">
                            <p class="error-msg"  id="error-msg"></p>
                        </div>

                    </form>
                </div>
                <div class="article-right">
                    <div class="article-right-head">
                        <h1>List Of Medications</h1>
                    </div>
                    <div class="article-right-search">
                        <p class="error-msg-search"></p>
                        <form action="" method="post">
                            <label for="felt-opt">Filtering options :</label>
                            <select name="" id="felt-opt">
                                <option value="">All</option>
                                <option value="">Name</option>
                                <option value="">Code</option>
                                <option value="">Type</option>
                            </select>
                            <input type="text" placeholder="Type something">
                            <button type="submit" id="search-btn" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>                            
                        </form>
                    </div>
                    <div class="article-right-table">
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
                                    echo "
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Type</th>
                                            <th>Quantity</th>
                                            <th>Expiration Date</th>
                                            <th>Sell</th>
                                        </tr>
                                    ";
                                    while($enregistrement=$list_medic->fetchObject()){
                                        echo "<tr id='$enregistrement->medic_id'>";
                                        echo "<td> $enregistrement->medic_name</td>";
                                        echo "<td> $enregistrement->medic_code</td>";
                                        echo "<td> $enregistrement->medic_type</td>";
                                        echo "<td> $enregistrement->quantity</td>";
                                        echo "<td> $enregistrement->expiration_date</td>";
                                        echo "<td> </td>";
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