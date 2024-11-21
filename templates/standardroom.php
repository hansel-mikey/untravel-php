<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard room</title>
    
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<style>
    h1{
        text-align: center;
        justify-self: center;
    }
  

    img{
        width: 90%;
        height: 40%;
        margin-bottom: 50px;
    }

    span {
      display: block;
      margin-bottom: 5px;
      
    }


    .checked {
      color: orange;
    }

    ul{
        display: flex;
        list-style-type: none;
        gap: 50px;
        font-size: 20px;
       
    }

    ul li{
        margin-left: 20px;
    }

   
    .container2 h2 {
       padding: 20px;    
    }

    .amenities li {
  margin-bottom: 10px;
  padding: 20px;
  border: 1px solid #0c0c0c00;
  border-radius: 5px;
  transition: transform .2s; 
  width: 100px;
  height: 30px;
  margin: 0 auto;
  white-space:  nowrap;  
  
}

li:hover{
    transform: scale(1.2); 
}



    
.container3{
   padding: 20px;    
    }

.hotel li{
  margin-bottom: 10px;
  padding: 20px;
  border: 1px solid #0c0c0c00;
  border-radius: 5px;
  transition: transform .2s; 
  width: 100px;
  height: 30px;
  margin: 0 auto;
  white-space:  nowrap;  
    }

    li:hover{
    transform: scale(1.2); 
}

.rules li {
    list-style:inside;

}

button{
        padding: 10px 80px ; 
        background-color: #007bff;
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
        margin-left: 40%;
         margin-top: 10px;
            
}

button:hover {
            background-color: #0056b3; /* Darker background color on hover */
        }
    </style>
<body>
    <h1>Delux Room - Booking Form</h1>
    
    <div class="container">
        
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
     
      <img src="/static/room2.jpg" alt="">
      <ul>
        <li><i class="fa-solid fa-bed"></i> 1 King Beds</li>
        <li><i class="fa-regular fa-user"></i> Max: 4 Guests</li>
        <li>30 Sqm</li>
        <li><i class="fa-solid fa-city"></i> City View</li>
    </ul>
    <hr>
     <div class="container2">
        <h2>Room Amenities</h2>
         
        <ul class="amenities">
            <li><i class="fa-solid fa-wifi"></i> Free wifi</li>
            <li><i class="fa-solid fa-tv"></i> Tv</li>
            <li>Air conditioning</li>
            <li><i class="fa-solid fa-phone"></i> Phone</li>
           
        </ul>

        <ul class="amenities">
            <li>Iron & Ironing board</li>
            <li>Hair dryer</li>
            <li>Mini fridge</li>
            <li>Heater</li>
        </ul>
              
     </div>



     <div class="container3">
        <h2>Hotel Amenities</h2>
        <ul class="hotel">
            <li><i class="fa-solid fa-dumbbell"></i> Gym</li>
            <li>Parking</li>
            <li><i class="fa-solid fa-utensils"></i> Restaurant</li>
            <li>Room Service</li>
        </ul>
        <ul class="hotel">
            <li><i class="fa-solid fa-spa"></i> Spa</li>
            <li><i class="fa-solid fa-water-ladder"></i> Swimming Pool</li>
            <li>24 Hour Concierge</li>
            <li><i class="fa-solid fa-jug-detergent"></i> In-house Laundry</li>
        </ul>
     </div>

     <hr>
     <div class="container4">
        <h2>Hotel Rules</h2>
        <ul class="rules">
            <li>Smoking not allowed</li>
            <li>Pets not allowed</li>
            <li>Swimming pool closed from 8.00pm - 6.00am</li>
        </ul>

        <button href="/templates/hotel.html">Book Now!</button>
    </div>


</body>
</html>