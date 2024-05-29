<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .signup-link {
            color: #007BFF;
            text-decoration: none;
        }
        .signup-link:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website</h1>
        <p>This is a placeholder homepage. You can replace this content with your own.</p>
        <p>Feel free to explore the website!</p>
        <!-- Sign-in Form -->
        <form action="process_login.php" method="post">
    <h2>Sign In</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" value="Sign In">
    <?php
    if (isset($_GET['error'])) {
        echo '<p class="error-message">Username or password is invalid.</p>';
    } elseif (isset($_GET['success'])) {
        echo '<p class="success-message">Login successful.</p>';
    }
    ?>
</form>

        <!-- Sign-up Link -->
        <p>Don't have an account? <a href="signup.php" class="signup-link">Sign Up</a></p>
    </div>
   
</body>

</html>
