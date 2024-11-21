<?php
// Start the session
session_start();

// Include the database connection file
$mysqli = require __DIR__ . "/database.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape the email to prevent SQL injection
    $email = $mysqli->real_escape_string($_POST["email"]);

    // Fetch user from the database based on email
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user was found with the given email
    if ($result && $result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($_POST["password"], $user["password_hash"])) {
            // Password is correct, set user data in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
             // Add the line below to set the session variable for the username
    $_SESSION['username'] = $user['name']; // Assuming the username column exists in your database

            
            // Set login success flag
            $_SESSION['login_success'] = true;

            // Redirect to desktop page
            header("Location: desktop.php");
            exit();
        }
    }

    // If the login fails, redirect back to the login page with an error message
    $_SESSION['error'] = "Invalid email or password";
    header("Location: login.php");
    exit();
}

// Redirect to the login page if the form wasn't submitted
header("Location: login.php");
exit();
