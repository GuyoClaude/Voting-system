<?php
  include_once  'header.php';
?>


    <section class="main-container">
        <div class="main-wrapper">
            <h4 class="vote">Online Voting System.</h4>
          
            <?php
              if (isset($_SESSION['u_id'])) {
                  
                  echo '<div class="wel">Welcome! You are logged In. Please choose your preferred candidate</div>
                  <h3 class="info">Nairobi County.</h3>
                  <h3 class="info">Embakasi Central Constituency.</h3>

                  <form action="js/charge.php" method="post" class="voting-form">
                  <input type="number" name="user_ID" placeholder="ID Number" required>
                  <input type="text" name="user_name" placeholder="User_name" required>
                   <hr class="hr">
                  <h4 class="pres">Presidential Bid.</h4>
                  <div class="gall">
            <div class="responsive">
              <div class="gallery">
               
                  <img src="img/raila.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"><input type="radio" name="for_president" value="Raila Odinga" checked> Raila Odinga<br></div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                
                  <img src="img/UhuRuto.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"> <input type="radio" name="for_president" value="Uhuru Kenyatta"> Uhuru Kenyatta<br></div>
              </div>
            </div>



            <div class="responsive">
              <div class="gallery">

                  <img src="img/dida.jpg" alt="Forest" width="600" height="400">

                <div class="desc"> <input type="radio" name="for_president" value="Abduba Dida">Abduba Dida<br></div>
              </div>
            </div>
            </div>
            
            <h4 class="pres">Nairobi Governor</h4>
               <div class="gall">
            <div class="responsive">
              <div class="gallery">
               
                  <img src="img/keneth.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"><input type="radio" name="for_governor" value="Peter Keneth" checked> Peter Keneth<br></div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                
                  <img src="img/sonko.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"> <input type="radio" name="for_governor" value="Mike Mbuvi Sonko"> Mike Mbuvi Sonko<br></div>
              </div>
            </div>



            <div class="responsive">
              <div class="gallery">

                  <img src="img/miguna.jpg" alt="Forest" width="400" height="400">

                <div class="desc"> <input type="radio" name="for_governor" value="Miguna Miguna">Miguna Miguna<br></div>
              </div>
            </div>
            </div>
            
               <h4 class="pres">Nairobi Senator</h4>
               <div class="gall">
            <div class="responsive">
              <div class="gallery">
               
                  <img src="img/john.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"><input type="radio" name="for_senator" value="Sakaja Johnson" checked> Sakaja Johnson<br></div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                
                  <img src="img/wanjiru.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"> <input type="radio" name="for_senator" value="Bishop Wanjiru"> Bishop Wanjiru.<br></div>
              </div>
            </div>



            <div class="responsive">
              <div class="gallery">

                  <img src="img/phil.jpg" alt="Forest" width="400" height="400">

                <div class="desc"> <input type="radio" name="for_senator" value="Phillip Mpayei">Phillip Mpayei<br></div>
              </div>
            </div>
            </div>
            
               <h4 class="pres">Embakasi Member of Parliament</h4>
               <div class="gall">
            <div class="responsive">
              <div class="gallery">
               
                  <img src="img/emab2.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"><input type="radio" name="for_mp" value=" Sumra Truiph" checked> Sumra Truiph<br></div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                
                  <img src="img/emba3.jpg" alt="Forest" width="400" height="400">
               
                <div class="desc"> <input type="radio" name="for_mp" value="James Mwangi"> James Mwangi<br></div>
              </div>
            </div>



            <div class="responsive">
              <div class="gallery">

                  <img src="img/emba.jpg" alt="Forest" width="400" height="400">

                <div class="desc"> <input type="radio" name="for_mp" value="Mejja Donk">Mejja Donk<br></div>
              </div>
            </div>
            </div>
            
            <br>
            
                <button type="submit" name="submit">Cast Vote</button> <br>
                
                
            </form> ';
                  
                  
              } else {
                  
                      echo " <div class='danger'><strong>Welcome!</strong> Please Login with your <b>ID Number</b> and <b>Password</b> or Create an account </div>" ;
                    echo '<div class="content"><img src="img/voting.PNG" alt="vote" width="80%" height="350px"></div>';
                  
             
              }
          
            
            
            ?>
            
            
        </div>
    </section>
    <style>
        div.gallery img {
   width: 74%;
    height: 100px;
    border: 2px green solid;        
}
        .gall {
            margin-left: 20px;
        }

div.desc {
    font-size: 16px;
}
        div.desc input{
    cursor: pointer;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 -6px;
    float: left;
    text-align: center;
    width: 33.333%;
}
        
        .pagination {
    display: block;
    text-align: center;
            
}
        .pres {
             font-size: 16px;
            margin-left: 50px;
            color: #111;
            font-family: 'Time new romans';
        }
        .vote {
            font-size: 26px;
            color: green;
            text-align: center;
            font-family: 'Time new romans';
        }
        .content {
            margin: 10px;
            text-align: center;
        }
        .bed {
            float: center;
        }
        .info {
            color: green;
            font-family: 'Time new romans';
            text-align: center;
            font-size: 23px;
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
       
        
        /*Voting-form*/

.voting-form {
    width: 100%;
    margin-bottom: 10px;
    padding-top: 30px;
    background-color: ghostwhite;
    
}

.voting-form input{
    
    width: 80%;
    margin-left: 30px;
    height: 40px;
    border-radius: 5px;
    padding: 0px 5%;
    margin-bottom: 4px;
    border: none;
    background-color: #fff;
    font-family: "Times new romans";
    line-height: 30px;
    font-size: 16px;
    color: #111;
}
        
        .hr{
            color: #222;
            align-content: center;
            width: 60%;
            margin-left: 220px;
        }

.voting-form button{
     display: block;
    margin: 0 auto;
    border-radius: 10px;
    width: 30%;
    height: 40px;
    border: none;
    background-color: royalblue;
    font-family: "Times new romans";
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    bottom: 
}

.voting-form button:hover{
    background-color: green;
    color: #111;
    
}

    </style>




    <?php
  include_once  'footer.php';
?>
