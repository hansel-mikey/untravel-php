<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"  href="desktop.css">
    <script src="/static/desktop.js"></script>
    <style>
    /* profile img style  */
.profile-img {
  width: 30px; /* Adjust as needed */
  height: 30px; /* Adjust as needed */
  border-radius: 50%; /* Makes the image round */
}

.logo,
.menu li a {
            font-family: 'Roboto', sans-serif;
        }


</style>
    <title>UNTRAVEL</title>

    
</head>

<body>


        <!--===========Nav Bar=================-->
        <section class="nav-bar">
            <div class="logo" >UNTRAVEL</div>
            <ul class="menu">
                <li><a href="#">home</a></li>
                
                <li><a href="hotel.php">Hotels</a></li>
                <li><a href="blogpage.php">blog</a></li>
                <li><a href="contactus.php">contact us</a></li>
                
                 
                <?php
session_start();

if(isset($_SESSION['user_name'])){
    // If the user is logged in, display the profile button and the "Sign Out" button
    echo '<li a href="profile.php"><img src="boy.png" class="profile-img"> Welcome, ' . $_SESSION['user_name'] . '</a></li>';
    echo '<li><a href="logout.php">Sign Out</a></li>'; // Link to log out
} else {
    // If the user is not logged in, display the "Sign In" button
    echo '<li><a href="login.php">Sign In</a></li>';
}
// this is to check if the user is logout or not 
// checking if the user has clicked on the sign out button 
if(isset($_GET['logout'])){
    // unset all the session variables
    $_SESSION = array();
    // destroy the session 
    session_destroy();
    // redirect to the desktop page after the logout 
    header("location: desktop.php");
    exit;
}
?>
            </ul>
            </div>

        </section>
        <!--===============Banner================-->
        <section class="banner">
            <img src="desktop.jpg" alt="" srcset="">
        
            <div class="banner-text-item">
                <div class="banner-heading">
                    <h1>Find your Next tour!</h1>
                </div>
                 
                    <a href='rooms.php' class="book">book your Hotel</a>
                </form>
            </div>
        </section>

        <!--=========Services===============-->
        <div class="rows">
            <h1>Popular  <span>Destinations</span></h1><br> <br>
            
            <a href="blogpage.php">
            <div class="column">
                <img src="church.jpg" alt="church" style="width: 100%;">
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <h3>Our Lady of Immaculate Conception Chapel</h3>
             </div>

            <div class="column">
                <img src="Butterfly Beach.jpg" alt="nadu" width="100%">
                <span class="fa fa-star checked" style="color: gold;"></span>
      <span class="fa fa-star checked" style="color: gold;"></span>
      <span class="fa fa-star checked" style="color: gold;"></span>
      <span class="fa fa-star checked"  style="color: gold;"></span>
      <span class="fa fa-star"></span>
                <h3>Butterfly Beach</h3>
            </div>

            <div class="column">
                <img src="boat.jpg" alt="goa" width="100%">
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star"></span>
                <h3>Cruise on the Mandovi River</h3>
                
            </div>
        </div>
        </a>

         <!--=========Activity===============-->
         <div class="rows">
            <h1>Featured Activities</h1>
           <a href="blogpage.php">
            <div class="column">
                <img src="scuba.jpg" alt="Scuba" style="width: 100%;">
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked"  style="color: gold;"></span>
                <span class="fa fa-star"></span>
                <h3>Scuba Driving</h3>
             </div>

            <div class="column">
                <img src="club.jpg" alt="Trekking" width="100%">
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
               <h3>Clubs</h3>
            </div>

            <div class="column">
                <img src="cycle.jpg" alt="rafting" width="100%">
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <span class="fa fa-star checked" style="color: gold;"></span>
                <h3>BLive Electric Bike Tours </h3>
                
            </div>
        </div>
        </a>
        <!--===========About Us===============-->
        <section class="about">
            <div class="about-img">
                <img src="about.jpg" alt="about">
            </div>
            <div class="about-text">
                <small>ABOUT OUR COMPANY</small>
                <h2>Welcome to Untravel!</h2>
                <p>Welcome to Untravel, your ultimate destination for a perfect getaway in the serene beaches of Goa. 
                  Nestled amidst the palm-fringed shores and azure waters, our hotel offers an unforgettable experience tailored to your every need. 
                  With luxurious Deluxe Rooms, comfortable Standard Rooms, and budget-friendly Simple Rooms, we cater to all preferences. 
                  Our user-friendly website allows seamless booking, ensuring a hassle-free experience. At untravel, hospitality is our
                  passion, and our dedicated team is committed to exceeding your expectations. Come, experience the magic of Goa with us, 
                 where every moment is a cherished memory in the making.</p>
            
                <a href="#">ABOUT US</a>
            </div>
        </section>

 


        <!--===========Footer=================-->
        
        <footer class="site-footer">
            <div class="container">
                <div class="row1">
                    <h3>Quick Links</h3>
                        <ul>
                            <li><a href="desktop.php">Home</a></li>
                            <li><a href="hotel.php">Hotels</a></li>
                            <li><a href="blogpage.php">Blog</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
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
        
    </body>

</html>
</body>

</html>