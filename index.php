<?php
  include_once  'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Voting System</title>
    <link rel="shortcut icon" href="img/vote_pic.jpg" type="image/png">
</head>
<body>
    
</body>
</html>


    <section class="main-container">
        <div class="main-wrapper">
            <h4 class="info">Online Voting System.</h4>
          
            <?php
              if (isset($_SESSION['u_id'])) {
                  
                  echo '<div class="wel">Welcome! You are logged In. Please choose your preferred candidate</div>
                  <h3 class="info">Nairobi County.</h3>
                  <h4 class="info1">Please choose your Constituency to cast your vote.</h4>
                  <div class="content"></div>
                  

                ';
                  
                  
              } else {
                  
                      echo " <div class='danger'><strong>Welcome!</strong> Please Login with your <b>ID Number</b> and <b>Password</b> or Create an account </div>" ;
                    echo '<div class="content"><img src="img/voting.PNG" alt="vote" width="80%" height="350px"></div>';
                  
             
              }
          
            
            
            ?>
            
            
        </div>
    </section>
      <style>
          .content {
              height: 400px;
          } 
          .content img{
              margin-top: 10px;
              margin-left: 102px;
          } 
 
        .info {
            color: green;
            font-family: 'Time new romans';
            text-align: center;
            font-size: 23px;
        }
          .info1 {
            color: green;
            font-family: 'Time new romans';
            text-align: center;
            font-size: 18px;
        }

        .danger {
            background-color: #ff3333;
            color: #222;
            border-radius: 10px;
            text-align: center;
            width: 60%;
            margin-left: 225px;
            line-height: 30px;
            font-size: 13px;
            font-family: 'Time new romans;

        }
        .wel {
            background-color: limegreen;
            color: #111;
            border-radius: 10px;
            text-align: center;
            width: 43%;
            margin-left: 295px;
            line-height: 20px;
            font-size: 13px;
            font-family: 'Time new romans;

        }
       
        
  

    </style>




    <?php
  include_once  'footer.php';
?>
