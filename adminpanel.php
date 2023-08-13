<?php

session_start();

?>

<html>
     <head>
        <title>Adminlogin</title>
        

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     </head>
    <body>
        <div class="container">
         <div class="card">
           
           <div class="inner-box" id="card">
               <div class="card-front">
                   <h2>Admin Login</h2>
                   <form action="adminlogin.php" method="post">
                   <input type="Name" name="Name" id="Name" class="input-box"  placeholder="Your Name" required>
                       <input type="Email" name="Email" id="Email" class="input-box"  placeholder="Your Email ID" required>
                       <input type="Password" name="Password" id="Password" class="input-box" placeholder="Password" required>
                       <button type="submit" class="submit-btn">Submit</button>
                       
                   </form>
                   <button  onclick="window.location.href='login.php';" class="btn" >USER LOGIN</button>
                 
                
               </div>
               

    </body>
</html>