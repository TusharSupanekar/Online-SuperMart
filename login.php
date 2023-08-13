<?php

session_start();

?>

<html>
     <head>
        <title>Login and Register</title>
        

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     </head>
    <body>
        <div class="container">
         <div class="card">
           
           <div class="inner-box" id="card">
               <div class="card-front">
                   <h2>Login</h2>
                   <form action="validation.php" method="post">
                       <input type="email" name="email" id="email" class="input-box"  placeholder="Your Email ID" required>
                       <input type="password" name="password" id="password" class="input-box" placeholder="Password" required>
                       <button type="submit" class="submit-btn">Submit</button>
                       <input type="checkbox"><span>Remember me</span>
                   </form>
                   <button type="button" class="btn" onclick="openRegister()">New User? Sign up</button>
                   <a href="">Forget Password</a>
                   <button type="button" class="btn" onclick="window.location.href='adminpanel.php';">ADMIN LOGIN</button>
               </div>
               <div class="card-back">
                <h2>Register</h2>
               

                <form action="registration.php" method="post">
                    <input type="text" name="name" id="name" class="input-box"  placeholder="Your name" required>
                    <input type="email" name="email" id="email" class="input-box" placeholder="Your email ID" required>
                    <input type="password" name="password" id="password" class="input-box"  placeholder="Password" required>
                    <button type="submit" class="submit-btn">Submit</button>
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button type="button" class="btn" onclick="openLogin()">Already a user?</button>
                <a href="">Forget Password</a>
               </div>
           </div>  
         </div>
        </div>




        <script>
            var card = document.getElementById("card");
            function openRegister(){
             card.style.transform = "rotateY(-180deg)";
            }
            function openLogin(){
                card.style.transform = "rotateY(0deg)";
            }
        </script>



    </body>
</html>