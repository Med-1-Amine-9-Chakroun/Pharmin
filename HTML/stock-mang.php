<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/style-nav-bar.css">
        <link rel="stylesheet" href="../CSS/alert-mang-style.css">
        <link rel="stylesheet" href="../CSS/stock-mang-style.css">

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
                            <a href="medic-mang.html">Medication</a>
                        </li>
                        <li>
                            <a href="pack-mang.html">Packaging Material</a>
                        </li>
                        <li>
                            <a href="stock-mang.html">Invoice</a>
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
                        <a href="alert-interface.html">
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
                        <h1>Medication </h1>
                    </div>
                    <div class="article-left-table">
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Add</th>
                            </tr>
                        </table>
                    </div>
                    <div class="article-left-head-2">
                        <h1>Packaging Material</h1>
                    </div>
                    <div class="article-left-table">
                        <table>
                            <tr>
                                <th>Name</th>                                
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Add</th>
                            </tr>
                            <tr>
                                <td>efefef</td>
                                <td>efefef</td>
                                <td>efefef</td>
                                <td>efefef</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="article-right">
                    <div class="article-right-head">
                        <h1>Creating An Invoice</h1>
                    </div>
                    <form action="" method="post">
                        <label for="name">Medication Name :</label>
                        <input type="text" id="name" class="" placeholder="Enter Name" required>
                        <label for="desc">Medication Code :</label>
                        <input type="text" id="desc" class="" placeholder="Enter Description" required>
                        <label for="quantity">Quantity :</label>
                        <input type="text" id="quantity" class="" placeholder="Enter Quantity" required>
                        <label for="name">Package Name :</label>
                        <input type="text" id="name" class="" placeholder="Enter Name" required>
                        <label for="desc">Packege Code :</label>
                        <input type="text" id="desc" class="" placeholder="Enter Description" required>
                        <label for="quantity">Quantity :</label>
                        <input type="text" id="quantity" class="" placeholder="Enter Quantity" required>
                        <p class="error-msg"  id="error-msg"></p>
                        <button type="submit" class="add-btn">ADD</button>                        
                    </form> 
                </div>
            </article>
        </section>
        
        <footer></footer>
    </body>
</html>