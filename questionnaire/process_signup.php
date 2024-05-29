<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "questioner"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement to insert user data into the database
$sql = "INSERT INTO users (fname, lname, username, email, phonenumber, password) 
        VALUES ('$fname', '$lname', '$username', '$email', '$phonenumber', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to index.php after successful sign-up
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
