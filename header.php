<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
                          
        <img src="img/vote_pic.jpg" alt="Voters" width="120px" height="60px" class="img">
            <div class="nav">
               <?php
                if (isset($_SESSION['u_id'])) {
                echo '
                <ul class="head">
                
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                     <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Constituency</a>
                        <div class="dropdown-content">
                          <a href="dago.php">Starehe Consitency</a>
                          <a href="kibra.php">Kibra </a>
                          <a href="emba.php">Embakasi Central</a>
                        </div>
                      </li>
                    <li><a href="index.php">FAQ</a></li>
                    <li> <a href="js/customers.php">Admin</a></li>
                   </ul>';
                    }
                ?>
                </div>
                <div class="main-wrapper">
                
                <div class="nav-login">
                  
                   <?php  
                    if (isset($_SESSION['u_id'])) {
                        echo ' <form action="include/logout.inc.php" method="post">
                        <button type="submit" name="submit" class="logout">Logout</button>
                    </form>
                    '
                            
                            ;
                    }else {
                        echo '<form action="include/login.inc.php" method="POST">
                        <input type="number" name="uid" placeholder="ID Number">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                        <button><a href="signup.php">Sign up</a></button>
                    </form>';
                    }
                    ?>
                    
                    <style>
                       
                        header .nav-login form button{
                            float: left;
                            width: 60px;
                            height: 30px;
                            margin-right: 10px;
                           border-radius: 9px;
                            border: none;
                            background-color: royalblue;
                            font-family: "Times new romans";
                            cursor: pointer;
                            color: #fff;
}
                         header .nav-login form button:hover{
                           background-color: lightblue;
                            color: #222;
                            }
                        li a, .dropbtn {
                                display: inline-block;
                                color: black;
                                text-decoration: none;
                            }

                            li a:hover, .dropdown:hover .dropbtn {
                                
                            }

                            li.dropdown {
                                display: inline-block;
                            }

                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: lightgray;
                                min-width: 130px;
                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                z-index: 1;
                            }

                            .dropdown-content a {
                                color: black;
                                padding: 2px 6px;
                                text-decoration: none;
                            }

                            .dropdown-content a:hover { background-color: white}

                            .dropdown:hover .dropdown-content {
                                display: block;
                            }
                    </style>
                    
                   
                    
                </div>
            </div>
        </nav>
    </header>