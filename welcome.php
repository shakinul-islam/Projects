<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit(); 
}

$user_name = $_SESSION['user_name'];  // Retrieve the user's name from session
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 100px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2em;
        }

        p {
            font-size: 1.2em;
            color: #555;
        }

        .logout-button {
            padding: 10px 20px;
            background-color: #d9534f;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .logout-button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login successful! Welcome, <?php echo $user_name; ?></h1>
        <p>We're glad to have you here.</p>
        <form action="logout.php" method="POST">
            <input type="submit" class="logout-button" value="Logout">
        </form>
    </div>
</body>
</html>
