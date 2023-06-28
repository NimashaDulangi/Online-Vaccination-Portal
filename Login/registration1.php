<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Citizen Registration</title>
    <link rel="stylesheet" href="index.css"/>
	<style>
	
	.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
h1.login-title {
    color: #666;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}

 body{
      
             background-image:url('parallax.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;  
             background-size: cover;
             
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
                    <button><a href="login1.php">LogIn</a></button>
					 <button><a href="logout1.php">LogOut</a></button>
                </div>
        </header>


       
        <br>
<?php
    require('db1.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users1` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login1.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration1.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="IC No or Service No" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login1.php">Login here</a></p>
    </form>
<?php
    }
?>


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
