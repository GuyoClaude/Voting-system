<!DOCTYPE html>
<html lang="en">
<head>
  <title>Al-Milki Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  
  <style>
      body{
           font-family: 'times new romans';
      }
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
      .head{
          padding-bottom: 0;
          padding-top: 0;
      }
      nav {
         border: none;
          text-decoration: none;
          font-family: 'times new romans';
          
      }
      #myNavbar ul li active{
          color: lightblue;
      }
      form{
          margin-top: 20px;
      }
      form input {
          margin: 10px;
      }
      form  button {
          margin: 10px;
          
          
      }
      form select {
          margin: 10px;
      }
      form #card-element{
          margin: 10px;
      }
      .pa {
          font-size: 11px;
          color: orangered;
      }
      .dan {
          font-size: 12px;
      }
      .bed{
          margin: 0px;
          
      }
      .bed img {
          border-radius: 7px;
      }
          footer {
        
       
         margin-top: 0;
              
    padding-top: 0;
        padding-bottom: 0;
    }
footer .fa {
    padding: 20px;
  	font-size: 20px;
    text-decoration: none;
  	
}
footer .fa:hover{
  	color: #d5d5d5;
  	text-decoration: none;

  }
footer   .fa-instagram {
  color: #990066;
  }
  footer .fa-google {
  color: red;
  }
 footer .fa-facebook{
  color: #3b5998;

}
 .fa-snapchat{
  color: yellow;

}
 footer  .fa-twitter{
  color: #00aced;

      
  </style>
</head>
<link rel="icon" type="image/png" href="images/h5.jpg"/>
<body>

<div class="jumbotron text-center head" style="margin-bottom:0">
  <img src="images/h1.jpg" alt="hotel" width="100%" height="200px">
</div>

<nav class="navbar navbar-inverse" style="background:darkblue">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Al-Milki Hotel</a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="activ"><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <h4><b>Prices</b></h4>
       <div class="col-md-3 bed">
           <img src="images/h5.jpg" alt="bed" width="75px" height="50px"> Single<p class="list-price text-danger"><s> $24.00   </s>price:$21.00 </p></div>
            <div class="col-md-3 bed">
                <img src="images/h11.jpg" alt="bed" width="75px" height="50px"> Double<p class="list-price text-danger">  <s>$32.00    </s>price:$29.00</p></div>
        <div class="col-md-3 bed"><img src="images/h2.jpg" alt="bed" width="75px" height="50px">King Bed <p class="list-price text-danger"><s> $42.00    </s>price:$40.00 </p> </div>
        <div class="col-md-3 bed"><img src="images/h12.jpg" alt="bed" width="75px" height="50px">Quad Bed  <p class="list-price text-danger"><s>$36.00 </s>price:$33.00</p></div>  <br>

      <h3 style="color:blue">Reservations</h3>
      <p>Pay now to reserve your hotel room [$10]</p>
      <p class="pa">Free parking | Free Wifi | Warm swimming pools | Perfect for couples</p>
      <div class="btn btn-danger dan">Deposits of 10 USD MUST be paid for any room before reservation</div>
      
      
     <form action="js/charge.php" method="post" id="payment-form">
  <div class="form-row">
  	<input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty"  placeholder="First Name" required>
  	<input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty"  placeholder="last Name" required>
  	<input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
  	<p class="p">Check In                |                        Check Out</p> <input type="date" name="date"> 
  	<input type="date" name="Check_out">
  
  	
  	<select type="room" name="room_type" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Room type" selected  required>
  <option value="Single Bed">Single Bed</option>
  <option value="Double_bed">Double Bed</option>
  <option value="Quad Bed">Quad Bed</option>
  <option value="King Bed">King Bed</option>
  <option value="Queen Bed">Queen Bed</option>
</select>
   <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Reserve</button>
</form> <br> <br> <br>
      <h3>About Us</h3>
      <p>Our Journey to Give best services</p>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Who we are</a></li>
        <li><a href="#">Accomodation</a></li>
        <li><a href="#">Tour Guide</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
      <h3>LET US HELP YOU</h3>
      <p>Have an issue, Questions or Suggestions? <br> <a href="#">Contact Us</a></p>
    </div>
    <div class="col-sm-8">
      <h2>Al-Milki Hotel</h2>
      <p>Beach Road Off Nyali Road, 80100 Mombasa, Kenya - <a href="#">Get direction</a>-3Km from Cinemax Nyali</p>
       <script>
                var i = 0; //start point
                var images = [];
                var time = 5000;

                //images list



                images[0] = 'h4.jpg';
                images[1] = 'h7.jpg';
                images[2] = 'h3.jpg';
                images[3] = 'h2.jpg';

                //change Imge
                function changeImg() {
                    document.slide.src = images[i];

                    if (i < images.length - 1) {
                        i++;

                    } else {
                        i = 0;

                    }
                    setTimeout("changeImg()", time);
                }

                window.onload = changeImg;
            </script>

            <img name="slide" width="100%" height="400px">
      <p>Al-Milki Hotel..</p>
      <p>Located in Mombasa, Al-Milki Hotel provides accommodations with free WiFi, seating area and flat-screen TV.All units come with a balcony, a kitchenette with an oven, and a private bathroom. A microwave and toaster are also offered, as well as a electric tea pot.</p>
      <br>
      <h2>Guests House</h2>
      <h5>Guests reservation with serene sites.Guests can relax in the garden at the property.

Nyali Beach is 1.1 km from Al-Milki Hotel, while Mamba Village Crocodile Farm is a 2-minute walk from the property. The nearest airport is Moi Airport, 11.3 km from the property. </h5>
      <img src="images/h8.jpg" alt="img"  width="100%" height="250px">
      <p>Guest Area..</p>
      <p>This property is also rated for the best value in Mombasa! Guests are getting more for their money when compared to other properties in this city.</p>
    </div>
  </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>

<div class="jumbotron text-center" style="margin-bottom:0">
  <footer class="container-fluid text-center" >
		<div class="row content">
			<div class="col-sm-4">
				<h3>Contact Us</h3><br>
				
				<p><b>Call:</b>+254-7-07 455 215<br> <b>        Email:</b>
				support@almilki.com</p>
				
			</div>
			<div class="col-sm-4">
				<h3>Connect with Us</h3>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-instagram"></a>
				
				
			</div>
			<div class="col-sm-4">
                <h3>Our Hours:</h3><h4><br><li>Mon-Sat: 0600-2200hrs</li> <br> <li>Sun: 0800-1800hrs</li></h4>
			</div> <br><br><br><br>
			
		</div>
		
</footer> 
</div>

</body>
</html>
