<?php
include 'connect.php';



if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $city=$_POST['city'];

    $crdname=$_POST['crdname'];
    $crdnumber=$_POST['crdnumber'];
    $expmounth=$_POST['expmounth'];
    $expyear=$_POST['expyear'];

    $cvv=$_POST['cvv'];
    $state=$_POST['state'];

   
   
    

    $sql_quary = "INSERT INTO `payment` (`name`, `id`, `mail`, `address`, `city`, `crdname`, `crdnumber`, `expmounth`, `expyear`, `cvv`, `state`)
    VALUES ('$name', '0', '$mail', '$address', '$city', '$crdname', '$crdnumber', '$expmounth', '$expyear', '$cvv', '$state');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
       echo "<script>alert('Card Insert Successfully.')</script>";
      ;
    }else{
        die(mysqli_error($con));
    }

}



session_start();

// Check if the session variable is set
if (isset($_SESSION['totalAmount'])) {
    $totalAmount = $_SESSION['totalAmount'];
} else {
    // Default value if the session variable is not set
    $totalAmount =0.00;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>payment</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!-- java script-->
    <script src="payment.js"></script> 
    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">




  <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif; /* Specify your desired font family */
            background-image: url('img/b2.jpg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
   
    header {
        position: sticky;
        top: 0;
        width: 100%;
        background-color: white; /* Change to the desired background color */
        z-index: 1000;
    }

    main {
        margin-top: 70px; /* Adjust this value based on your header's height */
    }
</style>

    <hr>
    
</head>    
<body>
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
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="uplodeimage.php">Reviews</a></li>
        <li><a href="user.php">User Account</a></li>
<li><a href="history.php">History</a></li>
        
    </ul>
   
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
                   <!--location-->
        <li><a href="#" class="btn_p"><i class='bx bx-location-plus'></i></a></li> 
       
          </div>

          
    </header><br><div class="card">
 
<div class="container_p">
    <form action="" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title"></h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="Buddhini Navodya">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="mail" placeholder="youremail@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="">
                </div>
                <div class="inputBox">
                    <span>food or drink names :</span>
                    <input type="text" name="city" placeholder="">
                </div>

                <div class="flex">
                    <div class="inputBox">
                       <!-- <span>Total price :</span>
                        <input type="text" name="state" placeholder="Rs.999.99">
                        
                        <div id="cart-container">
  
    <ul id="cart-items"></ul>
    <p>Total price: Rs.<span id="total">0.00</span></p><br> 

</div>-->

<span>Total price :</span>
            <input type="text" name="state" value="<?php echo $totalAmount; ?>" placeholder="Rs.999.99" readonly>
     
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>card type:</span>
                    <input type="text" name="crdname" placeholder="visa">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="crdnumber" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="expmounth" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="expyear" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="123">
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn">

    </form>
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