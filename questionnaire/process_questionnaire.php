<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "questioner";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $market = $_POST['market'];
    $business_name = $_POST['business_name'];
    $owner_name = $_POST['owner_name'];
    $contact = $_POST['contact'];
    $operational_challenges = $_POST['operational_challenges'];
    $financial_challenges = $_POST['financial_challenges'];
    $marketing_challenges = $_POST['marketing_challenges'];
    $customer_challenges = $_POST['customer_challenges'];
    $technological_challenges = $_POST['technological_challenges'];

    // Prepare SQL statement
    $sql = "INSERT INTO survey_responses (market, business_name, owner_name, contact, operational_challenges, financial_challenges, marketing_challenges, customer_challenges, technological_challenges)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $market, $business_name, $owner_name, $contact, $operational_challenges, $financial_challenges, $marketing_challenges, $customer_challenges, $technological_challenges);

    // Execute query
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect back to the form if accessed directly
    header("Location: questionnaire.php");
    exit;
}
?>
