<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Cart</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!-- java script-->
    <script src="category.js"></script>      
    <!--Box icon -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
  
    <style>
    header {
        position: sticky;
        top: 0;
        width: 100%;
        background-color: #fff2e6; /* Change to the desired background color */
        z-index: 1000;
    }

    main {
        margin-top: 70px; /* Adjust this value based on your header's height */
    }
</style>


</head>    
<body bgcolor="#ffd9b3">
    <header><br>
        <div class="nav container">
            <a href="index.php"class="logo"><i class='bx bx-home-smile bx-burst' ></i>Nora <br> Restaurant.lk</a>
            <img src="img/l1.png" alt="" class="pc_img">
                            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar">
      <li><a href="index.php" >Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="category.html">Category</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="uplodeimage.php">Reviews</a></li>
        <li><a href="user.php">User Account</a></li>
        <li><a href="history.php">History</a></li>
        
    </ul>
  
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
            
            <!--location-->
        <li><a href="location.html" class="btn_p"><i class='bx bx-location-plus'></i></a></li> 
         
        </div>
         
    </header><br>
 

            <h1 align="center">WHAT OUR GUESTS SAYS  ......</h1>
            <section class="news" id="news">
     <div class="news_ph">
         <img src="img/f2.jpeg" alt="" class="news_ph">
     </div>
</section>
    
    <!--category-->
    <section class="Properties container" id="category">
     
             <div class="carousel_category">
      <div class="carousel_inner_category">
         
          <div class="carousel_item_category carousel_item__active_category">
            
            <div class="carousel_caption_category">
              
            </div>
         </div>


         
            
      </div><br><br>



      <div class="Properties-container container">
 
    <?php
$db = mysqli_connect("localhost", "root", "", "nora");

$result = mysqli_query($db, "SELECT * FROM category");
while ($row = mysqli_fetch_array($result)) {
  echo "<div class='box'>";
     /*echo "<img src='img/".$row['image']."' >";*/
      echo "<h3>".$row['price']."</h3>";
   
    echo "<div class='content'>";
    echo "<div class='text'>";
        echo "<h3>".$row['name']."</h3>";
        echo "<p>".$row['discription']."</p>";
        echo "</div>";
        echo "</div>";
  echo "</div>";
}
?> 
      
    
        </div>
    </div>
        
</section>
    
     
   
    </body>
</html>




<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "nora");

  // If upload button is clicked and the form has been submitted...
  if (isset($_POST['upload']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['discription'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discription = $_POST['discription'];

    // Check if the data with the same name doesn't already exist in the database
    $checkQuery = "SELECT * FROM category WHERE name = '$name'";
    $checkResult = mysqli_query($db, $checkQuery);

    if (mysqli_num_rows($checkResult) == 0) {
      // Data doesn't exist, proceed with insertion
      $sql = "INSERT INTO category (name, price, discription) VALUES ('$name', '$price', '$discription')";
      $result = mysqli_query($db, $sql);

      if ($result) {
        echo "<script>alert('Insert Successfully.')</script>";
      } else {
        die(mysqli_error($con));
      }
    } else {
      // Data already exists, show a message or take appropriate action
      echo "<script>alert('Data with the same name already exists.')</script>";
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Cart</title>
  <style type="text/css">
     #content {
      width: 50%;
      margin: 20px auto;
      border: 1px solid #cbcbcb;
     }
     form {
      width: 50%;
      margin: 20px auto;
      margin-top: 100px;
      margin-left: 30px;
     }
     form div {
      margin-top: 5px;
     }
     #img_div {
      width: 80%;
      padding: 5px;
      margin: 15px auto;
      border: 1px solid #cbcbcb;
     }
     #img_div:after {
      content: "";
      display: block;
      clear: both;
     }
     img {
      float: left;
      margin: 5px;
      width: 300px;
      height: 140px;
     }
  </style>
  <!--Box icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>





<body bgcolor="#fff2e6">
  <header><br>
    <div class="nav container">
     
    
        <!-- Your menu items here -->
      </ul>
    </div>
  </header><br>


  <p style="background-color:#cc6600; color:white; font-size:30px; margin-top:80px;text-align:center;margin:20px auto;"> .... Put Your Comment Here ....  </p> <br><br>


  <div class="postcart_img">
    <div>
      <br><br><br>
      <h1 align="center">We belive good food offer great smile</h1>
    </div>

    <form method="POST" action="uplodeimage.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <span>Enter Your Name:</span>
      <input type="text" name="price" placeholder="" required><br><br>
      <br> <span>Header Description :</span>
      <input type="text" name="name" placeholder="" required><br><br>
      
      <span>Enter Yor Comment:</span>
      <textarea name="discription" placeholder="Enter Description"></textarea><br><br>
      <div>
        <button type="submit" name="upload">Submit</button>
      </div>
    </form>
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

</body>
</html>





