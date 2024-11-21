<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $paswd=$_POST['paswd'];
    $brithday=$_POST['brithday'];
   
    

    $sql_quary = "INSERT INTO `user` (`name`, `id`, `mail`, `phone`, `gender`, `paswd`, `brithday`)
    VALUES ('$name', '0', '$mail', '$phone', '$gender', '$paswd', '$brithday');";

    $result=mysqli_query($con,$sql_quary);

 if($result){
       echo "<script>alert('Data Send Successfully.')</script>";
       // header('location:login.php');
    }else{
        die(mysqli_error($con));
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign Up</title>
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
            background-image: url('img/s2.jpeg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
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
            <a href="index.php"class="logo"><i class='bx bx-home-smile bx-burst' ></i>Nora <br> Restaurant.lk</a>
            <img src="img/l1.png" alt="" class="pc_img">
 
            <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us </a></li>
        <li><a href="#">Category</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="#S">User Account</a></li>
        <li><a href="history.php">History</a></li>
    </ul>
   
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
            <!--location-->
        <li><a href="location.html" class="btn_p"><i class='bx bx-location-plus'></i></a></li>    
<a href="login.php" class="btn">Log In</a>          
</div>
    </header><br>
   

<p style="background-color:#cc6600; color:white; font-size:30px; margin-top:80px;text-align:center;margin:20px auto;"> Sign Up </p> 


<!--Sign up-->
    <section class="sign-up " id="sign-up">   
        
       <div class="container_con"> 
      <!-- <span class="big-circle"></span> -->
     <!-- <img src="img/shape.png" class="square" alt=""/> -->
      <div class="form">
        <div class="contact-info">
          <h3 class="title">... Already have account ... </h3> <br> <a href="login.php" align="center">Log In</a><br>
          <p class="text">
             
          </p><br><br><br>

          <div class="info">
            <div class="information">
        <i class='bx bxs-location-plus bx-fade-left' ></i>
                <p>29/04 Hight level Road,Colombo</p>
            </div>
            <div class="information">
              <i class='bx bx-envelope bx-fade-left' ></i>
               <p>Nora_restaurant.lk@gmail.com</p>
            </div>
            <div class="information">
              <i class='bx bx-phone-call bx-fade-left' ></i>
               <p>+94 312 255 615</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com">
                  <i class='bx bxl-facebook'></i>
              </a>
              <a href="https://twitter.com/i/flow/login">
                <i class='bx bxl-twitter'></i>
              </a>
              <a href="https://www.instagram.com/accounts/login/">
                <i class='bx bxl-instagram'></i>
              </a>
              <a href="#"><i class='bx bx-qr'></i></a>
            </div>
          </div>
        </div>

        <div class="contact-form">
         <!-- <span class="circle one"></span> -->
         <!-- <span class="circle two"></span> -->








          <form action="" method="POST" autocomplete="off">
            <!--<h3 class="title">Sign Up</h3>-->
              <label for="">Full Name:</label>
            <div class="input-container_con">
              <input type="text" name="name" class="input" placeholder="Your Name" />
            </div>
              <label for="">Enter your email address:</label>
            <div class="input-container_con">
              <input type="email" name="mail" class="input" placeholder="youremail@gmail.com" required/>
            </div>
              <label for="">Enter your Phone:</label>
            <div class="input-container_con">
              <input type="tel" name="phone" class="input" placeholder="+94 763 839 727" />
            </div>
	<label for="">Enter your gender:</label>
            <div class="input-container_con">
              <input type="gender" name="gender" class="input" placeholder="" />
            </div>

   <label for="">Enter your password:</label>
            <div class="input-container_con">
              <input type="password" name="paswd" class="input" placeholder="" />
            </div>  
<label for="">Date of Birthday:</label>
            <div class="input-container_con">
              <input type="Date" name="brithday" class="input" placeholder="" />
            </div>

<a href="#">Forget Password?</a>            
            
            <button type="submit" class="btn"  name="submit">Sign up now</button>
          </form>
        </div>
      </div>
    </div>
    
    
<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2><br><br>Nora Restaurant.lk<br><h10>Enjoy <b> Delicious Food </b><br> in Your Healthy Life.</h10></h2>
        <div class="footer-box">
            <h3><br><br>Quick links</h3>
            <a href="booktable.php"><i class='bx bx-home-smile' ></i> Book A Table</a>
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