<?php
  include_once  'header.php';
?>
   <style>
       .sign {
           font-size: 22px;
           text-align: center;
           color: #111;
           font-family: sans-serif;
       }
       .sign2 {
           font-size: 16px;
           text-align: center;
           color: #111;
           font-family: sans-serif;
       }
       .top{
           color: indianred;
           font-size: 36px;
           text-align: center;
       }
       .signup-form input {
           border-radius: 5px;
       }
       .signup-form button{
           border-radius: 7px;
           background-color: royalblue;
       }
</style>
    
    <section class="main-container">
        <div class="main-wrapper">
           <h2 class="top">Online Voting Sytem</h2>
            <h3 class="sign"><b>Create an acount </b><div class="sign2">Signup</div> </h3>
            <?php
            if (isset($_POST['submit'])){
           
                echo 'You have sucessfully created an e-Voting account.Please login.';
            }else {
               echo
            '
            <form action="include/signup.inc.php" method="post" class="signup-form">
                <input type="text" name="first" placeholder="Firstname" required>
                <input type="text" name="last" placeholder="Lastname" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="number" name="uid" placeholder="ID number" required>
                <input type="password" name="pwd" placeholder="Password" required>
                <button type="submit" name="submit">Sign up</button></form>'; 
            
                            }

                ?>
        </div>
    </section>


<?php
  include_once 'footer.php';
?>