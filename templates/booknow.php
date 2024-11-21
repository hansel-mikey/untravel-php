<?php
// Include the database connection file
error_reporting(E_ALL); #These lines enable error reporting and display errors on the web page. It's helpful for debugging during development.
ini_set('display_errors', 1);
include 'hoteldb.php'; # this includes the the datbase connection 

// Start the session
session_start();

// Check if the form was submitted This condition checks if the form was submitted using the POST method. If true, it proceeds with handling form data; otherwise, it redirects back to the booking page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    // mysqli is used to prevent sql injections 
    $room_type = mysqli_real_escape_string($conn, $_POST["room_type"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $check_in = mysqli_real_escape_string($conn, $_POST["check_in"]);
    $check_out = mysqli_real_escape_string($conn, $_POST["check_out"]);
    $adults = mysqli_real_escape_string($conn, $_POST["adults"]);
    $children = mysqli_real_escape_string($conn, $_POST["children"]);

    // Check if the user is logged in
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        // User is logged in, proceed with booking
        // Example: Insert booking details into the database
        $query = "INSERT INTO bookings (room_type, price, check_in, check_out, adults, children) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssii", $room_type, $price, $check_in, $check_out, $adults, $children);

        if ($stmt->execute()) {
            // Booking successful
            $_SESSION['booking_success'] = true;
            header("Location: success.php"); // Redirect to success page
            exit();
        } else {
            // Booking failed
            $_SESSION['booking_error'] = "Booking failed: " . $stmt->error;
            header("Location: error.php"); // Redirect to error page
            exit();
        }
    } else {
        // User is not logged in, redirect to login page
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        header("Location: login.php");
        exit();
    }
} else {
    // If the form wasn't submitted, redirect back to the booking page
    header("Location: booking.php");
    exit();
}