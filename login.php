<?php
include 'connect.php';


session_start();

error_reporting(0);
if (isset($_SESSION['name'])) {
    header("Location: user.php");
}



if(isset($_POST['submit'])){
    $mail = $_POST['mail'];
    $paswd = $_POST['paswd'];

    $sql = "SELECT * FROM user WHERE mail='$mail' AND paswd='$paswd'";
    $result=mysqli_query($con,$sql);
    if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['gender'] = $row['gender'];

		header("Location: user.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Log In</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


  <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif; /* Specify your desired font family */
            background-image: url('img/l10.jpeg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
 
    header {
        position: sticky;
        top: 0;
        width: 100%;
        background-color: #ffb380; /* Change to the desired background color */
        z-index: 1000;
    }

    main {
        margin-top: 70px; /* Adjust this value based on your header's height */
    }
</style>

    
</head>    
<body bgcolor="#fff2e6">
    <header><br>
        <div class="nav container">
            
            <a href="index.php" class="logo"><i class='bx bx-home-smile bx-burst' ></i>Nora <br> Restaurant.lk</a>
            <img src="img/l1.png" alt="" class="pc_img">
                            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
      <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us </a></li>
        <li><a href="#">Category</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="uplodeimage.php">Reviews</a></li>
        <li><a href="#S">User Account</a></li>
        <li><a href="history.php">History</a></li>
        </ul>
   
            <a href="sign-up.php" class="btn">Sign Up</a>
        
        </div>
    </header><br>

<!--login-->
    <div class="login container">
        <div class="login-container"> <br> <br>
            <h2> <b>Login Your Nora Restaurant Account<b></h2><br> <br<
            <p>If You Are Already Registered, Log in Here...... </p>
            
            <!--login form-->
           <!-- <form action="" method="post"> 


                <br><br><span>Enter your email address</span>
                <input type="email" name="mail"  placeholder="youremail@gmail.com" value="<?php echo $mail; ?>" required> <br> <br>
                <span>Enter your password </span>
                <input type="password" name="paswd" placeholder="password" value="<?php echo $_POST['paswd']; ?>" required>



                <div class="contact-form">-->


<form action="" method="POST" autocomplete="off" align="center">
  <h3 class="title" style="color:#cc6600;">Contact us</h3>

    <label for="">Enter your email address</label>
  <div class="input-container_con">
    <input type="email" name="mail" class="input" placeholder="youremail@gmail.com" value="<?php echo $mail; ?>" style="color:black;" required/>
  </div>
    <label for="">Enter your password</label>
  <div class="input-container_con">
    <input type="passwordtel" name="paswd" class="input" placeholder="password" value="<?php echo $_POST['paswd']; ?>" style="color:black;" />
  </div>
    



                
  <a href="sign-up.php">Forget Password ?</a>
                 <a href="sign-up.php" class="btn">Sign up now</a>
                <input type="submit" name="submit" class="buttom" value="Login">
           </form>
        </div>
        <!--login image-->
       <!-- <div class="login-image">
            <img src="img/im63.jpeg" alt="" width="1000" height="700">
        </div>-->
  


</div>
    
    
<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2><br><br>Nora Restaurant.lk<br><h10>Enjoy <b> Delicious Food </b><br> in Your Healthy Life.</h10></h2>
        <div class="footer-box">
            <h3><br><br>Quick links</h3>
            <a href="booktable.html"><i class='bx bx-home-smile' ></i> Book A Table</a>
            <a href="category.html"><i class='bx bx-building-house' ></i> Menu</a>
            <a href="#">Rates <i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star-half' ></i></a>
        </div>
        <div class="footer-box">
            <h3><br><br>Locations</h3>
            <a href="#"><i class='bx bx-location-plus' ></i> Colombo</a>
            <a href="#"><i class='bx bx-location-plus' ></i> Baththramulla</a>
            <a href="#"><i class='bx bx-location-plus' ></i> Mathra</a>
        </div>
        <div class="footer-box">
            <h3><br><br>Contacts</h3>
            <a href="#"><i class='bx bx-phone-call' ></i>  +94 312 255 615</a>
            <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfrLfwMrDLmwnPbrFlthmVCwdxMblVGvLnnHwMgfMQkBtmsRndqqmGXtNHwCZJWFhHRrcL"><i class='bx bx-envelope' ></i> 	Nora_restaurant.lk@gmail.com</a>
            <div class="social">
            <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>
            <a href="https://www.instagram.com/accounts/login/"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bx-qr'></i></a> 
            </div>
        </div>
    </div>  
</section>

<!--copyright-->
    <div class="copyright">
        <p>&#169; Nora Restaurant.lk We Are Near You 2020</p>
    
    </div>
    
    </body>
</html>