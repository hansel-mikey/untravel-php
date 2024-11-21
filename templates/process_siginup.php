<?php
session_start();

// this is for user validation this just checks if the user has entered the name or not
if (empty($_POST["name"])){
    die("Name is required");
    # the die part just print the message if the if statement is true 
}

// validating the email address 
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required ");
}

// validating the password 
// this checks the length of the password it should be more than 8 characters 
if (strlen($_POST['password']) < 8){
    die("Password must be at least 8 characters long ");
}
if (!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter ");
}
if (!preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number ");
}

// validating the re-entered password
if ($_POST["password"] !== $_POST['conformation_password']){
    die("The password doesn't match ");
}

// now connect to the database
$mysqli = require __DIR__ . "/database.php";

// check if the email already exists in the database
$sql_check_email = "SELECT COUNT(*) AS count FROM user WHERE email = ?";
$stmt_check_email = $mysqli->prepare($sql_check_email);
$stmt_check_email->bind_param("s", $_POST["email"]);
$stmt_check_email->execute();
$stmt_check_email->bind_result($count);
$stmt_check_email->fetch();
$stmt_check_email->close();

if ($count > 0) {
    die('Email already exists');
}

// insert the data into the table
$sql = "INSERT INTO user(name, email, password_hash) VALUES (?, ?, ?)";

// prepared statement 
$stmt = $mysqli->stmt_init(); 

// check for any syntax error
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

// encrypting the password 
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

// replacing the placeholder with the name 
$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

// execute the statement
if($stmt->execute()){
    $_SESSION['registration_success']=true; // setting the variable upon successful registration
    // Redirecting to the login page
    header("location:login.php");
    exit;
} else {
    // unsetting the session 
    unset($_SESSION['registration_success']);
    die("Error:".$stmt->error);
}

// Close the statement and the database connection
$stmt->close();
$mysqli->close();
?>
