<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>payment history</title>
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
            background-image: url('img/his.jpeg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>


<style>


body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fff2e6;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}





</style>




</head>
<body  bgcolor="#fff2e6">
    <header><br>
        <div class="nav containerr">
            <a href="index.php"class="logo"><i class='bx bx-home-smile bx-burst' ></i>Nora <br> Restaurant.lk</a>
                    
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
        
    </ul>
   
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
                   <!--location-->
        <li><a href="#" class="btn_p"><i class='bx bx-location-plus'></i></a></li> 
       
          </div>
</header>
<div class="pc_img">
              <img src="img/l1.png" alt="" class="pc_img">
            </div>



    <div class="container">
        <h1>Payment History</h1>
        <table id="paymentTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount (Rs.)</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Fetch and display payment history from the database
                include 'connect.php';
                $sql_query = "SELECT * FROM payment";
                $result = mysqli_query($con, $sql_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['date']}</td>";
                    echo "<td>{$row['state']}</td>";
                    echo "<td>{$row['city']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="hscript.js"></script>


    
</body>
</html>
