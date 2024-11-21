<?php 
include 'database.php';
include 'check_maintainance.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- this is bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="hotel.css">
    <!-- this is the google font link -->
   
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- this is the styles for the google fotns -->
    <style>

        *{
            font-family: "Poppins", sans-serif;
        }
        .h-font{
            font-family: "Merienda", cursive;
        }
        /* this is for the book now button */
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
/* this is footer css */
.site-footer {
  background-color: #333;
  color: #fff;
  padding: 80px 0;
  display: flex;  
  flex-direction: column;
  align-items: center;
}

.site-footer .container {
  max-width: 1200px;
  width: 100%;
  display: flex;
  justify-content: space-between;
}


.row1 h3,.row2 h3 ,.row3 h3{
  font-size: 25px;
  margin-bottom: 15px;
}
.row1 ,.row2 , .row3{
 color: #efebeb;
 font-size: 14px;
 line-height: 25px;
}
  
 </style>

        <!-- this link is for using the bootstrap icons  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">

    
    
    
</head>
<body background="hotel 2.jpg">
    <!--  changing the shadwon and using sticky to stick it at the top -->
    <?php include 'hotelnav.php'; ?>

<div class="hero">
    
    <div class="hero-content">
      <div class="col">
        <h5>Check Booking Availability</h5>
        <form id="availabilityForm"class="row g-3" method="GET" action="rooms.php">
          <div class="col-lg-3">
            <label for="destination" class="form-label" style="font-weight: 500;">Destination</label required >
            <input type="text" name="list" list="mylist" id="destination" class="form-control" placeholder="Where would you like to go?">
            <datalist id="mylist">
              <option>North Goa</option>
             <option>South Goa</option>
            
          </datalist>
        </div>
        <div class="col-lg-3">
          <label for="check-in" class="form-label" style="font-weight: 500;">Check-in</label>
          <input type="date" name="check_in" id="check-in" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="check-out" class="form-label" style="font-weight: 500;">Check-out</label>
          <input type="date" id="check-out" name="check_out" class="form-control">
        </div>
        <div class="col-lg-1">
          <label for="adults" class="form-label" style="font-weight: 500;">Adults</label>
          <select id="adults" name="adults" class="form-select">
            <option selected>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div class="col-lg-1">
          <label for="children" class="form-label" style="font-weight: 500;">Children</label>
          <select id="children" name="children" class="form-select">
            <option selected>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div class="col-lg-1">
          <button  type="submit" class="btn btn-primary">Submit</button>
          
        </div>
      </form>
    </div>
  </div>
</div>
<!-- this is the script ofr catching the filter used oveer to room.php filter -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.getElementById("availabilityForm");
            if (form) {
                form.addEventListener("submit", function(event) {
                    event.preventDefault(); // Prevent form submission
                    var formData = new FormData(form); // Serialize form data

                    // Send data to rooms.php using AJAX
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", "rooms.php?" + new URLSearchParams(formData).toString(), true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                document.location.href = "rooms.php?" + new URLSearchParams(formData).toString();
                            } else {
                                console.error("Request failed with status:", xhr.status);
                            }
                        }
                    };
                    xhr.send();
                });
            } else {
                console.error("Form with id 'availabilityForm' not found.");
            }
        });
    </script>



      <!--Rooms-->
     
<div class="rooms">
  <div class="container">
    <h2 class="mt-5 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <!-- Room 1 -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="hotel1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Suit Room</h5>
            <h6 class="mb-4">₹ 1500 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
            </div>
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-black custom-bg rounded-pill d-block mx-auto shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark text-black rounded-pill d-block mx-auto shadow-none">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">


        <!-- Room 2 -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="hotel3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Standard Room </h5>
            <h6 class="mb-4">₹ 2500 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
            </div>
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-black custom-bg rounded-pill d-block mx-auto shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark text-black rounded-pill d-block mx-auto shadow-none">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        
        <!-- Room 3 -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="hotel4.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Deluxe Room </h5>
            <h6 class="mb-4">₹ 5000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
              <span class="badge rounded-pill bg-light bi bi-star-fill text-warning"></span>
            </div>
            <div class="d-flex">
              <a href="#" class="btn btn-sm text-black custom-bg rounded-pill d-block mx-auto shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark text-black rounded-pill d-block mx-auto shadow-none">Read more</a>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="col-lg-12 text-center mt-5">
   <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More rooms>>></a>
</div>
  </div>
</div>
<!-- this is our faclites tab -->

<h2 class="mt-5 mb-4 text-center fw-bold h-font">Our Facilities</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadwo py-4 my-3">
        <img src="wi-fi.png" alt="wifi" style=max-width:50px;>
        <h5 class="mt-3"> Wifi</h5>
        

        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadwo py-4 my-3">
        <img src="tv.png" alt="tv" style=max-width:50px;>
        <h5 class="mt-3"> Television</h5>
        

        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadwo py-4 my-3">
      <img src="air-conditioner.png" alt="ac" style=max-width:50px; >  
        <h5 class="mt-3">AC</h5>
        

        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadwo py-4 my-3">
       <img src="call.png" alt="call" style=max-width:50px;>
        <h5 class="mt-3"> Room Service</h5>
      
        </div>
        
    </div>
</div>
<!-- reach us  -->
<h2 class="mt-5 mb-4 text-center fw-bold h-font">Reach us</h2>
 <div class="container">
     <div class="row">
         <div class="col-lg8 ">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984956.6947516924!2d73.34727765649347!3d15.350084569575603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfba106336b741%3A0xeaf887ff62f34092!2sGoa!5e0!3m2!1sen!2sin!4v1713859327057!5m2!1sen!2sin" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
          <div class="col-lg4">

          </div>
           <div class="col-lg-4 col-md-4"></div>
     </div>
 </div>


                     

                

                
    </div>
           

<br><br><br>
<br><br><br>
<!-- footer -->
<footer class="site-footer">
            <div class="container">
                <div class="row1">
                    <h3>Quick Links</h3>
                        <ul>
                            <li><a href="/templates/desktop.html">Home</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="/templates/blog.html">Blog</a></li>
                            <li><a href="/templates/contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <div class="row2">
                        <h3>Contact Us</h3>
                        <p>Email: <a href="mailto:sakshikaskar863@gmial.com">sakshikaskar863@gmail.com ,<br> hanseldsouza73@gmail.com</a><br>Phone: +91 9545229190 , +91 7304785442 </p>
                    </div>
                        
                   
                    <div class="row3">
                        <h3>Follow Us</h3>
                        <ul class="social-icons">
                            <li><a href="#">Facebook <i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"> Twitter <i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"> Instagram <i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"> Pinterest <i class="fab fa-pinterest"></i></a></li>
                        </ul>
                        
                    </div>
                
            </div>
            
        </footer> 
        



  

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
</body>
</html>