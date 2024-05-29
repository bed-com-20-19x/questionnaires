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
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement to fetch user
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Redirect to questionnaire.php if login is successful
        header("Location: questionnaire.php?success=true");
    } else {
        // Redirect to index.php with error message if password is incorrect
        header("Location: index.php?error=true");
    }
} else {
    // Redirect to index.php with error message if username doesn't exist
    header("Location: index.php?error=true");
}

// Close connection
$conn->close();
?>
