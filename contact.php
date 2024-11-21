<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $massage=$_POST['massage'];
   
    

    $sql_quary = "INSERT INTO `contact` (`name`, `id`, `mail`, `phone`, `massage`)
    VALUES ('$name', '0', '$mail', '$phone', '$massage');";

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
    <title>contact Us</title>
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
            background-image: url('img/c1.jpeg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
 
    header {
        position: sticky;
        top: 0;
        width: 100%;
        background-color: #ebebe0; /* Change to the desired background color */
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
                            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar">
      <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About Us </a></li>
       <li><a href="category.html">Category</a></li>
        <li><a href="contact.php"class="active">Contact Us</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="uplodeimage.php">Reviews</a></li>
        <li><a href="user.php">User Account</a></li>
        <li><a href="history.php">History</a></li>
        
    </ul>
    <hr>
   
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
            <!--location-->
        <li><a href="location.html" class="btn_p"><i class='bx bx-location-plus'></i></a></li>    
          </div>
    </header><br>
  
<!--contact-->
    <section class="contact us " id="contact">   
        
       <div class="container_con"> 
      <!-- <span class="big-circle"></span> -->
     <!-- <img src="img/shape.png" class="square" alt=""/> -->
      <div class="form">
        <div class="contact-info">
          <h3 class="title">... STAY IN TOUCH ...</h3><br><br>
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


          <form action="" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
              <label for="">User name:</label>
            <div class="input-container_con">
              <input type="text" name="name" class="input" placeholder="Buddhini_Nanayakkara" />
            </div>
              <label for="">Email:</label>
            <div class="input-container_con">
              <input type="email" name="mail" class="input" placeholder="youremail@gmail.com" required/>
            </div>
              <label for="">Phone Number:</label>
            <div class="input-container_con">
              <input type="tel" name="phone" class="input" placeholder="+94 763 839 727" />
            </div>
              <label for="">Massage:</label>
            <div class="input-container_con textarea">
              <textarea name="massage" class="input" placeholder="Massage..."  ></textarea>
            </div>
            <input type="submit" name="submit" value="Send" class="btn_con"/>
          </form>
        </div>
      </div>
    </div>
    <h1 class="title_1"><marquee> Nora  Restaurant.lk </marquee></h1><br>
    
    
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