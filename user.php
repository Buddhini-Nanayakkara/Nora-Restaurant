<?php 

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Nora Restuarent</title>
    
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    
    <!-- java script-->
    <script src="script%20home.js"></script>

    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   
  <style>

body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif; /* Specify your desired font family */
            background-image: url('img/u1.jpg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

    header {
        position: sticky;
        top: 0;
        width: 100%;
        background-color:#ffd9b3; /* Change to the desired background color */
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
       <li><a href="home.php">Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="category.html">Category</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="uplodeimage.php">Reviews</a></li>
        <li><a href="user.php"class="active">User Account</a></li>
        <li><a href="history.php">History</a></li>
        
    </ul>
  
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
            <!--location-->
        <li><a href="location.html" class="btn_p"><i class='bx bx-location-plus'></i></a></li> 
    <!--logOut bt-->
        <a href="logout.php" class="btn">Log Out</a>
        </div><br>
        </header>
       
   <br>
       <center> <?php echo "<h1>Welcome to Nora Restuarent... ENJOY YOUR FOOD AT FOODY...  " . "</h1>"; ?><br><?php echo "<h1>Have a Great Day..". $_SESSION['name'] . "</h1>"; ?>
          <br></center>
          </div>
        <div class="user_dc">
            <center><br> <br>
       <?php echo "<h3>Name&nbsp;&nbsp;&nbsp;:- " . $_SESSION['name'] . "</h3>"; ?>
        <br> <br><?php echo "<h3>E-Mail       :-" . $_SESSION['mail'] . "</h3>"; ?>
       <br><br> <?php echo "<h3>Phone Number :-" . $_SESSION['phone'] . "</h3>"; ?>
     <br> <br> <?php echo "<h3>Gender       :-" . $_SESSION['gender'] . "</h3>"; ?> 
      </center></div>
         
    
     
    
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
