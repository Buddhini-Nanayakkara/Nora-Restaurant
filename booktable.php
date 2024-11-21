<?php
// Validate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $people = isset($_POST["People"]) ? $_POST["People"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $message = isset($_POST["Message"]) ? $_POST["Message"] : "";

    // Perform basic validation (you may want to add more validation)
    if (empty($username) || empty($email) || empty($people) || empty($date) || empty($message)) {
        echo "Please fill in all the required fields.";
    } else {
        // Connect to the database
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "nora";

        $conn = new mysqli($servername, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO bookings (username, email, people, date_and_time, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $username, $email, $people, $date, $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Booking successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and the database connection
        $stmt->close();
        $conn->close();
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>about</title>
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
            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar" >
       <li><a href="index.php">Home</a></li>
        <li><a href="about.html"class="active">About Us </a></li>
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
 
	<head><link rel="stylesheet" href="booktable.css">

<style>

*{
	//background-color: #f2f6ff;
	margin: 0;
	}

form{
	background-color: white;
	width: 700px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	border: 1px solid #ccc;
	}
#form-heading{
	font-size: 32px;
	padding-top: 56px;
	padding-bottom: 32px;
	}

#input-wrapper{
	padding-top: 80px;
	padding-bottom: 40px;
	padding-left: 80px;
	padding-right: 80px;
	}
.input-box{
	text-align: left;
	font-size: 18px;
	padding-bottom: 12px;
	margin-bottom: 36px;
	border-top: 0px;
	border-right: 0px;
	border-left: 0px;
	border-bottom: 1px solid #ccc;
	width: 100%;
	}
.submit-button{
	background-color: #0056ff;
	padding-top: 12px;
	padding-bottom: 12px;
	padding-left: 24px;
	padding-right: 24px;
	font-size: 18px;
	color: white;
	border: none;
	}

</style>

</head>
	<body>	
    <form method="post" action="" >
        <h1 id="form-heading" >Book a Table</h1>
        <div id="input-wrapper">
            <input class="input-box" type="text" name="username" placeholder="Username">
            <input class="input-box" type="email" name="email" placeholder="Email">
            <input class="input-box" type="number" name="People" placeholder="How many people" required>
            <input class="input-box" type="datetime-local" name="date" placeholder="Date and time" name="date" value="2020-11-16T20:00" required>
            <input class="input-box" type="text" name="Message" placeholder="Message \ Special requirements" required>

            <button class="submit-button" type="submit">Book Now</button>
        </div>
    </form>

    <script>

    function handleFormSubmission(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Display the success notification
        showNotification('Table booking is successful!');
    }

    function showNotification(message) {
        // Check if the browser supports notifications
        if ('Notification' in window) {
            // Request permission to show notifications
            Notification.requestPermission().then(function (permission) {
                if (permission === 'granted') {
                

                    // Automatically close the notification after 5 seconds
                    setTimeout(function () {
                        notification.close();
                    }, 5000);
                }
            });
        }
    }
</script>


<h1 class="title_1"><marquee> Nora  Restaurant.lk </marquee></h1><br>      
            
<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2><br><br>Nora Restaurant.lk<br><h10>Enjoy <b> Delicious Food </b><br> in Your Healthy Life.</h10></h2>
        <div class="footer-box">
            <h3><br><br>Quick links</h3>
            <a href="#"><i class='bx bx-home-smile' ></i> Book A Table</a>
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

