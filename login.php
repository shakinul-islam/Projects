<?php
session_start();  // Start the session

include 'db.php';  // Include the database connection file

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to search for user by email
    $sql = "SELECT * FROM user WHERE email='$email'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User exists, now verify the password
        $row = mysqli_fetch_assoc($result);

        // Check if the password entered matches the hashed password in the database
        if (password_verify($password, $row['password'])) {
            // Password is correct
            $_SESSION['user_name'] = $row['name'];  // Store user name in session variable
            header("Location: welcome.php");  // Redirect to welcome page
            exit();  // Ensure no further code is executed
        } else {
            // Invalid password
            echo "Invalid password!";
        }
    } else {
        // No user found with this email
        echo "No user found with this email!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .message {
            text-align: center;
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            Email: <input type="email" name="email" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
