<?php

include 'news.html'

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $_POST["author"];
    $comment = $_POST["comment"];

    // Insert the comment into the database
    $sql = "INSERT INTO comments_table (author, comment) VALUES ('$author', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "Comment posted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>