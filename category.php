
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>category</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!-- java script-->
    <script src="category.js"></script>      
    <!--Box icon -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


    <style>
        .center {
            text-align: center;
        }

        #cart-icon {
            cursor: pointer;
        }

        #cart-container {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 1000;
        }

        .cart-item {
            margin-bottom: 10px;
        }


    
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
        <li><a href="category.html" class="active">Category</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="uplodeimage.php">Reviews</a></li>
        <li><a href="user.php">User Account</a></li>
        <li><a href="history.php">History</a></li>
    </ul>
    <!--add cart-->
        <li><a href="cart.php" class="btn_c"><i class='bx bxs-cart-add'></i></a></li>
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
          </div>


    </header><br>
   
    
    <!--category-->
    <section class="Properties container" id="category">
      <div class="heading" align="center">
          <span> One Thousands Flavors in One Place.....</span>
          <h2> Order Your Best Food Anytime</h2>
          <p> Get Your Own Like It...</p>
        </div>
             <div class="carousel_category">
                <div class="carousel_inner_category">
                    <div class="carousel_item_category carousel_item__active_category">
                            <img src="img/im10.jpeg" alt="" class="carousel_img_category">
                        <div class="carousel_caption_category">
                                <h1 class="carousel_title_category">Hey, Our Delicious Food is <br> Waiting for You...<i class='bx bx-home-heart'></i></h1>
                        </div>
                </div>
          <div class="carousel_item_category carousel_item__active_category">
            <img src="img/im11.jpeg"alt="" class="carousel_img_category">
            <div class="carousel_caption_category">
               <h1 class="carousel_title_category_1">Come and Join us Enjoy <br> much as You Like...</h1>
            </div>
         </div>

         <!-- Add this line before </body> -->
<script src="cart.js"></script>

          
      </div><br><br>

<h2 class="carousel_title_category"><i> Our Menu</i> </2>

    
<p style="background-color:#cc6600; color:white; font-size:30px; margin-top:80px;text-align:center;margin:20px auto;"> Food </p>    

 <!-- Cart Icon and Container -->
 <div id="cart-icon" onclick="toggleCart()">
    <i class='bx bx-cart-alt' style='font-size: 2rem;'></i>
    
</div>

<div id="cart-container">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <p>Total Amount: Rs.<span id="total">0.00</span></p><br>
    <a href="#" class="btn" onclick="confirmBuy()"> Buy Now</a>
</div>

<div class="Properties-container container">

      <!--box 1-->
        <div class="box">
        <img src="img/im20.jpeg" alt="" > 
 <a href="pizza.html"> > </i></a>
            <div class="content">
            <div class="text">
                <h3>Pizza</h3>

                </div> 
           </div>
        </div>


         
	<!--box 2-->
        <div class="box">
        <img src="img/im21.jpeg" alt=""> 
        <a href="pasta.html"> > </i></a>
                 <div class="content">
            <div class="text">
                <h3>Pasta</h3>
                </div> 
           </div>
        </div>
       	
	
  	<!--box 3-->
        <div class="box">
        <img src="img/im22.jpeg" alt="">
        <a href="payment.php"></a>
            <h3>Rs.999.99</h3>
            <div class="content">
            <div class="text">
                <h3>Avocado_Toast</h3>
                <input type="number" id="quantity1" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Avocado_Toast', 999.99, 'quantity1')">Add to Cart</button>
                </div> 
           </div>
        </div>
        
	 <!--box 4-->
        <div class="box">
        <img src="img/im23.jpeg" alt="">
        <a href="sushi.html">></a>
      
            <div class="content">
            <div class="text">
                <h3>Sushi_Burritos</h3>

                </div> 
           </div>
        </div>
        
	 <!--box 5-->
        <div class="box">
        <img src="img/im24.jpeg"alt="">
        <a href="acai.html">></a>

            <div class="content">
            <div class="text">
                <h3>Acai_Bowls</h3>

                </div> 
           </div>
        </div>
        
	 <!--box 6-->
        <div class="box">
        <img src="img/im25.jpeg" alt="">
        <a href="quinoa.html">></a>

            <div class="content">
            <div class="text">
                <h3>Quinoa_Bowls</h3>

                </div> 
           </div>
        </div>
        
        
	<!--box 8-->
        <div class="box">
        <img src="img/im27.jpeg" alt="">
        <a href="payment.php"></a>
            <h3>Rs.1589.99</h3>
            <div class="content">
            <div class="text">
                <h3>Tacose</h3>
                <input type="number" id="quantity2" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Tacose', 1589.99, 'quantity2')">Add to Cart</button>
                </div> 
           </div>
        </div>
        
	 <!--box 9-->
        <div class="box">
        <img src="img/im28.jpeg" alt="">
        <a href="payment.php"></a>
            <h3>Rs.799.99</h3>
            <div class="content">
            <div class="text">
                <h3>Burger</h3>
                <input type="number" id="quantity3" value="1" min="1">
                <button class="add-to-cart" onclick="addToCart('Burger', 799.99, 'quantity3')">Add to Cart</button>

                </div> 
           </div>
        </div>
       
	  <!--box 10-->
        <div class="box">
        <img src="img/im29.jpeg" alt="">
        <a href="payment.php"></a>
            <h3>Rs.499.99</h3>
            <div class="content">
            <div class="text">
                <h3>Frise</h3>
                <input type="number" id="quantity4" value="1" min="1">
                <button class="add-to-cart" onclick="addToCart('Frise', 499.99, 'quantity4')">Add to Cart</button>
                </div> 
           </div>
        </div>

		
         <!--box 11-->
        <div class="box">
        <img src="img/im29.1.jpeg" alt="">
        <a href="payment.php"></a>
            <h3>Rs.2399.99</h3>
            <div class="content">
            <div class="text">
                <h3>Lasanga</h3>
                <input type="number" id="quantity5" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Lasanga', 2399.99, 'quantity5')">Add to Cart</button>
                </div> 
           </div>
        </div>
 <!--box 11.1-->
        <div class="box">
        <img src="img/im29.2.jpeg" alt="">
        <a href="payment.php"></a>
            <h3>Rs.199.99</h3>
            <div class="content">
            <div class="text">
                <h3>Spring_Roll</h3>
                <input type="number" id="quantity6" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Spring_Roll', 199.99, 'quantity6')">Add to Cart</button>
                </div> 
           </div>
        </div>
        
    </div>

<script>
    function addToCart(name, price, quantityId) {
        // Get quantity from input field
        var quantity = parseInt(document.getElementById(quantityId).value);

        // Calculate total for the current item
        var totalPrice = price * quantity;

        // Create a new cart item
        var cartItem = document.createElement("li");
        cartItem.className = "cart-item";
        cartItem.textContent = quantity + " x " + name + " - Rs." + totalPrice.toFixed(2);

        // Add the item to the cart
        document.getElementById("cart-items").appendChild(cartItem);

        // Update the total amount
        updateTotal(totalPrice);
    }

    function updateTotal(price) {
        // Get the current total amount
        var currentTotal = parseFloat(document.getElementById("total").textContent);

        // Update the total amount
        var newTotal = currentTotal + price;
        document.getElementById("total").textContent = newTotal.toFixed(2);
    }

    function toggleCart() {
        var cartContainer = document.getElementById("cart-container");
        cartContainer.style.display = (cartContainer.style.display === "none" || cartContainer.style.display === "") ? "block" : "none";
    }
    
 
function confirmBuy() {
var paymentMethod = prompt("Please choose a payment method:\n1. Cash on Delivery\n2. Bank Payment");

if (paymentMethod === null) {
    alert("Purchase has been canceled.");
    return;
}

switch (paymentMethod) {
    case "1":
        alert("Thank you for your purchase! You have chosen Cash on Delivery. The items will be delivered soon.");
        resetCart();
        break;
    case "2":
        alert("Thank you for your purchase! Redirecting to the bank payment page...");
        // Redirect to payment.php
        window.location.href = "payment.php";
        break;
    default:
        alert("Invalid payment method. Purchase has been canceled.");
        break;
}
}

function resetCart() {
// Reset the cart after successful purchase
document.getElementById("cart-items").innerHTML = "";
document.getElementById("total").textContent = "0.00";
}


function resetCart() {
// Reset the cart after successful purchase
document.getElementById("cart-items").innerHTML = "";
document.getElementById("total").textContent = "0.00";
}

</script>

<!-- ... (unchanged footer and copyright sections) ... -->


    <br><br>





    <p style="background-color:#b30059; color:white; font-size:30px; margin-top:80px;text-align:center;margin:20px auto;"> Drink </p>    
    
     <!-- Cart Icon and Container -->
 <div id="cart-icon" onclick="toggleCart()">
    <i class='bx bx-cart-alt' style='font-size: 2rem;'></i>
</div>

<div id="cart-container">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <p>Total Amount: Rs.<span id="total">0.00</span></p><br>
    <a href="#" class="btn" onclick="confirmBuy()"> Buy Now</a>
</div>
    
    <div class="Properties-container container">
        
    
    
    
             <!--box 12-->
            <div class="box">
            <img src="img/im30.jpeg" alt="">
            <a href="payment.php"></a>
                <h3>Rs.279.99</h3>
                <div class="content">
                <div class="text">
                    <h3>Coffe</h3>
                    <input type="number" id="quantity7" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Coffe', 279.99, 'quantity7')">Add to Cart</button>
                    </div> 
                   
               </div>
            </div>
    
    
    
    
             <!--box 13-->
            <div class="box">
            <img src="img/im31.jpeg" alt="">
             
                <div class="content">
                <div class="text">
                    <h3>Matcha_Lattes</h3>
                    <a href="matcha.html">></a>
                    </div> 
               </div>
            </div>
            
         <!--box 14-->
            <div class="box">
            <img src="img/im32.jpeg" alt="">
            <a href="payment.php"></a>
                <h3>Rs.1199.99</h3>
                <div class="content">
                <div class="text">
                    <h3>Kombucha</h3>
                    <input type="number" id="quantity8" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Kombucha', 1199.99, 'quantity8')">Add to Cart</button>
                    </div> 
                     </div>
            </div>
            
         <!--box 15-->
            <div class="box">
            <img src="img/smoo.jpeg" alt="">
                <div class="content">
                <div class="text">
                    <h3>Smoothies</h3>
                    <a href="smoothies.html"> > </a>
                    </div> 
               </div>
            </div>
    
    
    
        <!--box 16-->
            <div class="box">
            <img src="img/im34.jpeg" alt="">
            <a href="payment.php"></a>
                <h3>Rs.409.99</h3>
                <div class="content">
                <div class="text">
                    <h3>Coconut_Water</h3>
                    <input type="number" id="quantity9" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Coconut_Water', 409.99, 'quantity9')">Add to Cart</button>
                    </div> 
               </div>
            </div>
    
        <!--box 17-->
            <div class="box">
            <img src="img/vege1.jpeg" alt="">
          
                <div class="content">
                <div class="text">
                    <h3>Vegetable Juice</h3>
                    <a href="vege.html">></a>
                    </div> 
               </div>
            </div>
    
    
    
        <!--box 18-->
            <div class="box">
            <img src="img/im36.jpeg" alt="">
            <a href="payment.php"></a>
                <h3>Rs.599.99</h3>
                <div class="content">
                <div class="text">
                    <h3>Sparkling_Water</h3>
                    <input type="number" id="quantity10" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Sparkling_Water', 599.99, 'quantity10')">Add to Cart</button>
                    </div> 
               </div>
            </div>
    
    
    
        <!--box 19-->
            <div class="box">
            <img src="img/im37.jpeg" alt="">
            <a href="payment.php"></a>
                <h3>Rs.389.99</h3>
                <div class="content">
                <div class="text">
                    <h3>Milk</h3>
                    <input type="number" id="quantity11" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Milk', 389.99, 'quantity11')">Add to Cart</button>
                    </div> 
               </div>
            </div>
    
        <!--box 20-->
            <div class="box">
            <img src="img/tea.jpeg" alt="">
                <div class="content">
                <div class="text">
                    <h3>Tea</h3>
                    <a href="teas.html">></a>
                    </div> 
               </div>
            </div>
    
    
    
        <!--box 21-->
            <div class="box">
            <img src="img/im39.jpeg" alt="">
            <a href="payment.php"></a>
                <h3>Rs.1189.99</h3>
                <div class="content">
                <div class="text">
                    <h3>Infused_Water</h3>
                    <input type="number" id="quantity12" value="1" min="1">
                    <button class="add-to-cart" onclick="addToCart('Infused_Water', 1189.99, 'quantity12')">Add to Cart</button>
                    </div> 
               </div>
            </div>
</div>


<br><br>       
 <!--<center><iframe src="img/Ladies And Gentlemen Are You Ready Sound Effect.mp4" 
    name="myFrame" width="1500" height="350">
    </iframe></center>--> 


<script>
    function addToCart(name, price, quantityId) {
        // Get quantity from input field
        var quantity = parseInt(document.getElementById(quantityId).value);

        // Calculate total for the current item
        var totalPrice = price * quantity;

        // Create a new cart item
        var cartItem = document.createElement("li");
        cartItem.className = "cart-item";
        cartItem.textContent = quantity + " x " + name + " - Rs." + totalPrice.toFixed(2);

        // Add the item to the cart
        document.getElementById("cart-items").appendChild(cartItem);

        // Update the total amount
        updateTotal(totalPrice);
    }

    function updateTotal(price) {
        // Get the current total amount
        var currentTotal = parseFloat(document.getElementById("total").textContent);

        // Update the total amount
        var newTotal = currentTotal + price;
        document.getElementById("total").textContent = newTotal.toFixed(2);
    }

    function toggleCart() {
        var cartContainer = document.getElementById("cart-container");
        cartContainer.style.display = (cartContainer.style.display === "none" || cartContainer.style.display === "") ? "block" : "none";
    }
    
 
function confirmBuy() {
var paymentMethod = prompt("Please choose a payment method:\n1. Cash on Delivery\n2. Bank Payment");

if (paymentMethod === null) {
    alert("Purchase has been canceled.");
    return;
}

switch (paymentMethod) {
    case "1":
        alert("Thank you for your purchase! You have chosen Cash on Delivery. The items will be delivered soon.");
        resetCart();
        break;
    case "2":
        alert("Thank you for your purchase! Redirecting to the bank payment page...");
        // Redirect to payment.php
        window.location.href = "Total price/category.php";
        break;
    default:
        alert("Invalid payment method. Purchase has been canceled.");
        break;
}
}

function resetCart() {
// Reset the cart after successful purchase
document.getElementById("cart-items").innerHTML = "";
document.getElementById("total").textContent = "0.00";
}


function resetCart() {
// Reset the cart after successful purchase
document.getElementById("cart-items").innerHTML = "";
document.getElementById("total").textContent = "0.00";
}

</script>

<!-- ... (unchanged footer and copyright sections) ... -->



</section>














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
            <input type="text" name="state" value="<>" placeholder="Rs.999.99" readonly>
     
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