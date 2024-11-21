<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- this is the icons link -->
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="blogpage.css">
  <style>
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
</head>
<body>
  <section class="main">
    <div class="container">
        <?php
        include 'hotelnav.php';
        ?>
      <h1>Welcome To my Blog</h1>

    </div>

    <div class="blog-posts">
      <img src="church.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> June 6, 2016</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
     <p>Our Lady of Immaculate Conception Chapel, located in the heart of Panjim, Goa, holds a significant place in both the religious and cultural landscape of the region. Dating back to the 16th century, it stands as a testament to the enduring heritage of Goa, showcasing exquisite Portuguese Baroque architecture with its intricate carvings and iconic bell towers. Beyond its architectural splendor, the chapel serves as a spiritual sanctuary, attracting pilgrims who seek solace and blessings from the Virgin Mary.</p>
        <button onclick="myFunction()" id="myBtn">Read more</button>
    </div>

    <!--blog 2-->
    <div class="blog-posts">
      <img src="Butterfly Beach.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> October 12, 2021</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
     
      <p>Nestled along the southwestern coast of Goa lies the enchanting Butterfly Beach, a hidden gem known for its secluded cove and pristine beauty. Accessible only by boat or a scenic trek through dense forests, this secluded paradise offers a serene escape from the bustling crowds. Named after the vibrant butterflies that flutter along its shores, the beach boasts soft golden sands, crystal-clear waters, and lush greenery. Visitors can relax on the beach, soak up the sun, and swim in the gentle waves, or explore the surrounding cliffs and rock formations. With its untouched natural beauty and tranquil atmosphere, Butterfly Beach is a must-visit destination for nature lovers and adventurers seeking a peaceful retreat in Goa's coastal wilderness.</p>
      <button onclick="myFunction()" id="myBtn">Read more</button>
     </div>

     <!--Blog 3-->
     <div class="blog-posts">
      <img src="water sports.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> April 5, 2020</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
      
      <p>In Goa, water sports enthusiasts are treated to an exhilarating array of aquatic adventures along its pristine coastline. From parasailing high above the azure waters to jet skiing along the coastline, there's something for every thrill-seeker. Banana boat rides offer fun for groups, while windsurfing and kiteboarding cater to those seeking a challenge. Scuba diving and snorkeling unveil the mesmerizing underwater world teeming with vibrant marine life. With numerous operators dotting the beaches, Goa's water sports scene promises endless excitement for adventurers of all levels.</p>
      <button onclick="myFunction()" id="myBtn">Read more</button>
     </div>

     <!--Blog 4-->
     <div class="blog-posts">
      <img src="club.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> January 25, 2022</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
     <p style ="color:blue;">In Goa, the nightlife scene pulsates with energy, and its clubs are at the heart of the action. From iconic beach clubs overlooking the Arabian Sea to trendy nightclubs in bustling towns, there's a venue to suit every taste. International DJs spin beats that keep the dance floors alive until dawn, while themed parties and live performances add to the allure. Whether you're sipping cocktails by the poolside or dancing under the stars, Goa's clubs offer an unforgettable party experience. With a laid-back vibe and a diverse crowd of locals and tourists, these clubs are the perfect setting for making memories that last a lifetime.</p>
      <button onclick="myFunction()" id="myBtn">Read more</button>

     </div>

     <!--Blog 5-->
     <div class="blog-posts">
      <img src="Scuba.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> January 25, 2022</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
     
      <p>Scuba diving in Goa offers an unforgettable underwater adventure amidst vibrant coral reefs and diverse marine life. With its clear turquoise waters and gentle currents, Goa's coastline provides the perfect backdrop for exploring underwater wonders. From colorful coral gardens to exotic fish species, scuba divers can immerse themselves in a mesmerizing world beneath the waves. Experienced instructors and dive operators ensure safe and memorable dives for enthusiasts of all levels. Whether you're a novice or an experienced diver, Goa's scuba diving experiences promise exhilaration and discovery beneath the sea.</p>
      <button onclick="myFunction()" id="myBtn">Read more</button>

     </div>

     <!--blog 6-->
     <div class="blog-posts">
      <img src="cycle.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> January 25, 2022</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
     
      <p>Exploring Goa on a cycle ride offers a unique and immersive way to discover the region's beauty and charm. With its winding coastal roads, lush countryside, and quaint villages, Goa provides scenic routes for cyclists of all levels. From leisurely rides along the beach to challenging trails through hilly terrain, there's something for every enthusiast. Renting a bicycle is easy, with numerous rental shops available across popular tourist areas. Cycling through Goa allows you to connect with nature, soak in the sights and sounds, and create unforgettable memories at your own pace.</p>
      <button onclick="myFunction()" id="myBtn">Read more</button>

     </div>

     <!--blog 7-->
     <div class="blog-posts">
      <img src="mandovi-river-cruise.jpg" alt="image">
     <ul class="icon">
      <li><i class="fa-solid fa-clock"></i> January 25, 2022</li>
      <li><i class="fa-regular fa-note-sticky"></i> John Deo</li>
      <li><i class="fa-regular fa-comment"></i> Comments</li>
      <li><i class="fa-regular fa-heart"></i> Likes</li>
     </ul>
     
      <p>A cruise on the Mandovi River in Goa promises a tranquil journey through scenic beauty and cultural richness. Embark on a leisurely boat ride and witness the picturesque landscapes unfold along the riverbanks. Enjoy panoramic views of lush greenery, quaint villages, and historic landmarks as you glide across the serene waters. Many cruises offer onboard entertainment, including traditional music and dance performances, adding to the charm of the experience. Whether you opt for a daytime sightseeing cruise or a romantic sunset voyage, exploring the Mandovi River offers a peaceful escape amidst Goa's vibrant energy.</p>
      <button onclick="myFunction()" id="myBtn">Read more</button>

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
                            <li><a href="contact.php">Contact Us</a></li>
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
<script>
function myFunction(id) {
      var x = document.getElementById(my_btn);
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>