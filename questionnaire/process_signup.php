<?php
// Database connection
$servername = "localhost";  // Usually 'localhost' for local development
$username = "root";         // Your MySQL username
$password = '';             // Your MySQL password
$dbname = "questioner";     // Your MySQL database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Function to sanitize input data
function sanitize($input) {
    global $mysqli;
    return $mysqli->real_escape_string($input);
}

// Get the email, username, and password from the form input
$email = sanitize($_POST['email']);
$username = sanitize($_POST['username']); // Assuming you have a username field
$password = sanitize($_POST['password']); // Assuming you have a password field

// Check if username or email already exists
$query = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    // Username or email already exists
    $row = $result->fetch_assoc();
    if ($row['email'] == $email) {
        echo "Error: The email address is already registered.";
    } elseif ($row['username'] == $username) {
        echo "Error: The username is already taken.";
    }
} else {
    // Username and email do not exist, proceed with insertion
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Use password hashing for security
    $insert_query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

    if ($mysqli->query($insert_query) === TRUE) {
        // Registration successful, redirect to index.php for sign in
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $mysqli->error;
    }
}

// Close connection
$mysqli->close();
?>
