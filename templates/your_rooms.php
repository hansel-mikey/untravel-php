<?php 
session_start();
include 'database.php';
include 'check_maintainance.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Fonts link -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        *{
            font-family: "Poppins", sans-serif;
        }
        .h-font{
            font-family: "Merienda", cursive;
        }
        .custom-bg {
            background-color: lightgreen; /* Change to your desired light green color */
        }
        /* Navbar profile styles */
        .profile-link {
            display: flex;
            align-items: center; /* Align items vertically */
            text-decoration: none; /* Remove underline from link */
            color: #333; /* Change text color */
        }

        .profile-img {
            width: 20px; /* Adjust as needed */
            height: 20px; /* Adjust as needed */
            border-radius: 50%; /* Makes the image round */
            margin-right: 5px; /* Add some space between image and text */
        }

        .profile-name {
            font-size: 14px; /* Adjust font size */
        }
    </style>
</head>
<body>
    <?php include 'hotelnav.php'; ?>
    <h2 class="text-center mt-3">Your Booked Rooms</h2>

    <?php 
    // Connect to the database
        // print_r($_SESSION);
        $email = $_SESSION['user_email'];
        $sql = "SELECT * FROM bookings WHERE email='$email'";
        $result = mysqli_query($mysqli, $sql);
        $data = mysqli_fetch_assoc($result);
    ?>

<div class="container">
<table class="table table-bordered">
    <tr>
        <th>Room no</th>
        <th>Room Type</th>
        <th>Your Email</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Adults</th>
        <th>Children</th>
        <th>Price</th>
    </tr> 
    
    <?php foreach ($result as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['room_type']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date_in']; ?></td>
            <td><?php echo $row['date_out']; ?></td>
            <td><?php echo $row['adults']; ?></td>
            <td><?php echo $row['children']; ?></td>
            <td><?php echo $row['price'];?></td>
        </tr>
    <?php } ?>
</table>
</div>



</body>