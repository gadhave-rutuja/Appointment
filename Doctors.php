<?php
// Define database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$database = "your_database";

//Create connection
$conn = new mysqli('localhost','root','','appointment' /*$servername, $username, $password, $database*/);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $option = $_POST['Select_type'];
    $message = $_POST['message'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO contactform (name, email, phone, Select_type, message) VALUES ('$name', '$email', '$mobile', '$option', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>