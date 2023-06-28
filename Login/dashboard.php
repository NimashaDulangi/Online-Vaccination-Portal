<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Online Vaccination Portal</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		 body{
      
             background-image:url('parallax.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;  
             background-size: cover;
             
             }

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}


a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}


</style>
    </head>

    <body>
        <header>
                <a href="index.html"><img src="media/logo.jpg" alt="logo" class="logo"></a>
                <div class="headerNav">
                 
                    <a href="../menu.html">Menu</a>
                    <a href="">News</a>
                    <a href="">Medical & Health</a>
                    <a href="">Guidlines & Policies</a>
                    <a href="">ContactUs</a>
                    <a href="">RateUs</a>
                </div>
                <div class="headerButtons">
                    <button><a href="login.php">LogIn</a></button>
					 <button><a href="logout.php">LogOut</a></button>
                </div>
        </header>


       
        <br>
		
		
		<h2 style="text-align:center">Admin Profile Card</h2>

<div class="card">
  <img src="kindpng_211180.png" alt="Admin" style="width:100%">
  <h1><?php 
            echo $_SESSION['username']; 
			
			?></h1>

</div>

       
        
        

        <footer>
            <a href="index.html"><img src="media/logo.jpg" alt="logo" class="logo"></a>
                <div class="footerNav">
                    <h4>All rights reserved.</h4>
                    <a href="">News</a>
                    <a href="">Medical & Health</a>
                    <a href="">Guidlines & Policies</a>
                    <a href="">ContactUs</a>
                    <a href="">RateUS</a>
                </div>
                <div class="footerButtons">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                </div>
        </footer>


    </body>
</html>