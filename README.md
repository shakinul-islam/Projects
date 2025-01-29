# DBMS Project
Author-Md Shakinul Islam.
ID: 11220120822

📌 Project Overview

Register Page (index.php)
Users can register with their name, email, and password.
Passwords are hashed before being stored in the database.
After successful registration, the user is redirected to the login page.

Login Page (login.php)
Users enter their email and password.
If credentials are correct, they are redirected to the Welcome Page (welcome.php).
If incorrect, an error message is displayed.

Welcome Page (welcome.php)
Displays a welcome message with the user’s name.
Contains a Logout button.

Logout (logout.php)
Destroys the session and redirects the user to the Login Page (login.php).
