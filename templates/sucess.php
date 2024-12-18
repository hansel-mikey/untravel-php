<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Response Success</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Fonts link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            text-align: center;
        }
        .success-message {
            font-size: 24px;
            font-weight: 500;
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Response received Successful</h1>
        <p class="success-message">Your Response  has been successfully processed!</p>
        <?php if(isset($_SESSION['username'])) : ?>
            <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <?php endif; ?>
        <a href="hotel.php" class="btn btn-primary">Back to Home</a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
