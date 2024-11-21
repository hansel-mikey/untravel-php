<?php
// Include the database connection file
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'database.php';
include 'check_maintainance.php';
// Start the session
print_r($_POST);
session_start();
// print_r($_SESSION
if(empty($_GET['list'])){
    header("Location: hotel.php");
}
 

$room_type = "Deluxe Room";
    $price = "";
    $date_in = ""; // Note the underscore in the name attribute
    $date_out = "";  // Note the underscore in the name attribute
    $adults =  "";
    $children = "";
    $email = ""; 

// print_r($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $room_type = $_POST['room_type'];
    $email = $_SESSION['user_email'];
    $price = $_POST["price"];
    $date_in = $_POST["date_in"]; // Note the underscore in the name attribute
    $date_out = $_POST["date_out"]; // Note the underscore in the name attribute
    $adults = $_POST["adults"];
    $children = $_POST["children"];


    // Check if the user is logged in
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
         
        $query = "INSERT INTO bookings (email,date_in, date_out, adults, children,room_type,price) VALUES ('$email', '$date_in', '$date_out', '$adults', '$children','$room_type','$price')";        
        if ($mysqli->query($query) === TRUE) {
            // Booking successful
            $_SESSION['booking_success'] = true;
            header("Location: your_rooms.php"); // Redirect to success page
            exit();
        } else {
            // Booking failed
            $_SESSION['booking_error'] = "Booking failed: " . $conn->error;
            header("Location: error.php"); // Redirect to error page
            exit();
        }
    } else {
        // User is not logged in, redirect to login page
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        header("Location: login.php");
        exit();
    }
}
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


        .card {
    border-radius: 15px; /* Rounded corners */
}

.card-title {
    font-size: 18px; 
    /* Adjust font size */
}

.card-body {
    padding: 20px; /* Add padding */
}

.features, .facilities {
    margin-bottom: 15px; /* Add space between features and facilities */
   
   
}

.features h6, .facilities h6 {
    margin-bottom: 5px; /* Add space between feature/facility titles and items */
}

 .mb-3{
    margin-left:15px;
    font-size:18px

}
.badge {
    margin-right: 5px; /* Add space between badges */
}

/* Button styles */
.btn {
    border-radius: 15px; /* Rounded corners */
}




    </style>
</head>
<body>
    <?php include 'hotelnav.php'; ?>
    <h2 class="mt-5 mb-4 text-center fw-bold h-font">Our Rooms</h2>

 
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Suit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Standard</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Deluxe</button>
        </li>
    </ul>

   

    <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <!-- Suit Room -->
    <div class="container">
            <div class="row">
                <div class="container-fluid">
                <form action=""  method="post">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">FILTERS</h4>
                                    <div class="mb-3">
                                        <!-- This is the check-in date input -->
                                        <label for="check-in" class="form-label">Check-in</label>
                                        <input type="date" id="check-in" name="date_in" value="<?= $_GET['check_in'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <!-- This is the check-out date input -->
                                        <label for="check-out" class="form-label">Check-out</label>
                                        <input type="date" id="check-out" value="<?= $_GET['check_out'] ?>" name="date_out" class="form-control">
                                        <input type="hidden" name="price" value="2000">
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Facilities</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities1" type="checkbox" id="f1">
                                            <label class="form-check-label" for="f1">Facility one</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities2" type="checkbox" id="f2">
                                            <label class="form-check-label" for="f2">Facility two</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities3" type="checkbox" id="f3">
                                            <label class="form-check-label" for="f3">Facility three</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Guests</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <label for="adults" class="form-label">Adults</label>
                                                <input type="number" name="adults" value="<?= $_GET['adults'] ?>" id="adults" class="form-control">
                                            </div>
                                            <div>
                                                <label for="children" class="form-label">Children</label>
                                                <input type="hidden" name="children" value="2000">
                                                <input type="number" name="children" id="children" value="<?= $_GET['children'] ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <!-- Room Cards  -->
                          <div class="card mb-4 border-0 shadow">
                                <div class="row g-0 p-3 align-items-center">
                                    <div class="col-md-5">
                                        <img src="hotel1.jpg" class="img-fluid rounded-start" alt="..."> 
                                    </div>
                                    <div class="col-md-5">
                                    <h5 class="mb-3">Suit Room</h5>
                                        <input type="hidden" name="room_type" value="Suit Room">
                                        <div class="features mb-3">
                                            <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                        </div>
                                        <div class="facilities mb-3">
                                            <h6 class="mb-1">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h6 class="mb-4">₹ 1500 per night</h6>

                                            <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) : ?>
                                                <button type="submit" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Book Now</button>
                                            <?php else : ?>
                                                <a href="login.php?redirect=rooms.php&<?php echo http_build_query($_GET); ?>" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Log in to Book</a>
                                            <?php endif; ?>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div> 
                                <!-- Add similar code blocks for other room types -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- standard room -->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="container">
            <div class="row">
                <div class="container-fluid">
                <form action=""  method="post">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">FILTERS</h4>
                                    <div class="mb-3">
                                        <!-- This is the check-in date input -->
                                        <label for="check-in" class="form-label">Check-in</label>
                                        <input type="date" id="check-in" name="date_in" value="<?= $_GET['check_in'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <!-- This is the check-out date input -->
                                        <label for="check-out" class="form-label">Check-out</label>
                                        <input type="date" id="check-out" value="<?= $_GET['check_out'] ?>" name="date_out" class="form-control">
                                        <input type="hidden" name="price" value="2000">
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Facilities</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities1" type="checkbox" id="f1">
                                            <label class="form-check-label" for="f1">Facility one</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities2" type="checkbox" id="f2">
                                            <label class="form-check-label" for="f2">Facility two</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities3" type="checkbox" id="f3">
                                            <label class="form-check-label" for="f3">Facility three</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Guests</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <label for="adults" class="form-label">Adults</label>
                                                <input type="number" name="adults" value="<?= $_GET['adults'] ?>" id="adults" class="form-control">
                                            </div>
                                            <div>
                                                <label for="children" class="form-label">Children</label>
                                                <input type="number" name="children" id="children" value="<?= $_GET['children'] ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <!-- Room Cards  -->
                          <div class="card mb-4 border-0 shadow">
                                <div class="row g-0 p-3 align-items-center">
                                    <div class="col-md-5">
                                        <img src="hotel3.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-3">Standard Room</h5>
                                        <input type="hidden" name="room_type" value="Standard Room">

                                        <div class="features mb-3">
                                            <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                        </div>
                                        <div class="facilities mb-3">
                                            <h6 class="mb-1">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h6 class="mb-4">₹ 2500 per night</h6>

                                            <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) : ?>
                                                <button type="submit" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Book Now</button>
                                            <?php else : ?>
                                                <a href="login.php?redirect=rooms.php&<?php echo http_build_query($_GET); ?>" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Log in to Book</a>
                                            <?php endif; ?>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div> 
                                <!-- Add similar code blocks for other room types -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- deluxe  -->



  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="container">
            <div class="row">
                <div class="container-fluid">
                <form action=""  method="post">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">FILTERS</h4>
                                    <div class="mb-3">
                                        <!-- This is the check-in date input -->
                                        <label for="check-in" class="form-label">Check-in</label>
                                        <input type="date" id="check-in" name="date_in" value="<?= $_GET['check_in'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <!-- This is the check-out date input -->
                                        <label for="check-out" class="form-label">Check-out</label>
                                        <input type="date" id="check-out" value="<?= $_GET['check_out'] ?>" name="date_out" class="form-control">
                                        <input type="hidden" name="price" value="20000">
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Facilities</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities1" type="checkbox" id="f1">
                                            <label class="form-check-label" for="f1">Facility one</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities2" type="checkbox" id="f2">
                                            <label class="form-check-label" for="f2">Facility two</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities3" type="checkbox" id="f3">
                                            <label class="form-check-label" for="f3">Facility three</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Guests</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <label for="adults" class="form-label">Adults</label>
                                                <input type="number" name="adults" value="<?= $_GET['adults'] ?>" id="adults" class="form-control">
                                            </div>
                                            <div>
                                                <label for="children" class="form-label">Children</label>
                                                <input type="number" name="children" id="children" value="<?= $_GET['children'] ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <!-- Room Cards  -->
                          <div class="card mb-4 border-0 shadow">
                                <div class="row g-0 p-3 align-items-center">
                                    <div class="col-md-5">
                                        <img src="hotel4.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-3">Deluxe Room</h5>
                                        <input type="hidden" name="room_type" value="Deluxe Room">
                                        <div class="features mb-3">
                                            <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                        </div>
                                        <div class="facilities mb-3">
                                            <h6 class="mb-1">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h6 class="mb-4">₹ 5000 per night</h6>

                                            <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) : ?>
                                                <button type="submit" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Book Now</button>
                                            <?php else : ?>
                                                <a href="login.php?redirect=rooms.php&<?php echo http_build_query($_GET); ?>" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Log in to Book</a>
                                            <?php endif; ?>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div> 
                                <!-- Add similar code blocks for other room types -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
         







 
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
