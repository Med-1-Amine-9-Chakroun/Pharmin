<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alert</title>
        <link rel="stylesheet" href="../CSS/style-nav-bar.css">
        <link rel="stylesheet" href="../CSS/alert-mang-style.css">
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
                        <h1>Medication Out Of Stock</h1>
                    </div>
                    <div class="article-left-table">
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Command</th>
                            </tr>
                        </table>
                    </div>
                    <div class="article-left-head-2">
                        <h1>Expired Medication</h1>
                    </div>
                    <div class="article-left-table">
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Command</th>
                            </tr>
                            <tr>
                                <td>efefef</td>
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
                        <h1>Packaging Out Of Stock</h1>
                    </div>
                    <div class="article-right-table">
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Command</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </article>
        </section>
        
        <footer></footer>
    </body>
</html>