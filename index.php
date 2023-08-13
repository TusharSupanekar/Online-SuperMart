<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Supermart</title>
    

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Easy-Peazy Supermart</a>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#category">Category</a>
            <a href="#product">Products</a>
            <a href="#deal">Deal</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <a href="Card.php" class="fas fa-shopping-cart"></a>
            
            <a href="logout.php" class="fas fa-user-circle"></a><li>
           
			
        </div>

    </div>

</header>
<!-- header section ends -->



<!-- home section starts  -->

<section class="home" id="home">
 <div class="image-container owl-carousel owl-theme">
   <div class="image items ">
     <div class="image ">
        <img src="images/WhatsApp Image 2021-10-03 at 3.34.51 PM.jpeg" alt="">
    </div>

    <div class="content">
        <span>Shopping made easy!</span>
        <h3>Your Daily Need Products</h3>
        <a href="Vegetable&Fruits.php" class="btn">Get Started</a>
    </div>
   </div>
   
  <div class="image items">
   <div class="image  ">
        <img src="images/Web_Photo_Editor (31).jpg" alt="">
    </div>

    <div class="content ">
        <span>Shopping made easy!</span>
        <h3>Diwali Dhamaka Is Here</h3>
        <a href="bestDeals.php" class="btn">Get Started</a>
    </div>
  </div>
 </div>
</section>
<!-- home section ends  -->


<!-- banner section starts  -->
<section class="banner-container ">

    <div class="banner">
        <img src="images/poster1.jpg" alt="">
        <div class="content">
            <h3>Special Offer</h3>
            <p>Upto 45% off</p>
            <a href="Vegetable&Fruits.php" class="btn">Check Out</a>
        </div>
    </div>

    <div class="banner">
        <img src="images/poster2.jpg" alt="">
        <div class="content">
            <h3>Limited Offer</h3>
            <p>Upto 20% off</p>
            <a href="Snacks.php" class="btn">Check Out</a>
        </div>
    </div>

</section>
<!-- banner section ends -->


<!-- category section starts  -->

<section class="category" id="category">

    <h2 class="heading">Shop By  <span>Category</span></h2>

    <div class="box-container">

        <div class="box">
            <h3>Vegetables & Fruits</h3>
            <p>Upto 50% off</p>
            <img src="images/category1.jpg" alt="">
            <a href="Vegetable&Fruits.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <h3>Daily Staples & Snacks</h3>
            <p>Upto 30% off</p>
            <img src="images/category2.jpg" alt="">
            <a href="Snacks.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <h3>Cleaning & Body care</h3>
            <p>Upto 40% off</p>
            <img src="images/category3.jpg" alt="">
            <a href="Cleaning&BodyCare.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <h3>Home & Kitchen</h3>
            <p>Upto 35% off</p>
            <img src="images/category4.jpg" alt="">
            <a href="Home&Kitchen.php" class="btn">Shop Now</a>
        </div>
        

    </div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">Latest <span>Products</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
                <img src="images/p1.jfif" alt="">
                <h3>Basmati rice-5kg</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> ₹805 <span> ₹1199 </span> </div>
                <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /5kg </span>
            </div>
               
                <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Basmati Rice-5kg">
                <input type="hidden" name="price" value="805">
            </form>
        </div>


        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
                <img src="images/p2.jpg" alt="">
                <h3>Janta Agarbatti Stand</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">₹120  <span>  </span> </div>
                <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
                
                <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Janta Agarbatti Stand">
                <input type="hidden" name="price" value="120">
  
            </form>
        </div>

        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">

            <img src="images/p3.png" alt="">
            <h3>Pure Camphor</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹80  <span> ₹100  </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /pack </span>
            </div>
            
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Pure Camphor">
            <input type="hidden" name="price" value="80">
 
        </form>
        </div>

        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">

            <img src="images/p4.jpg" alt="">
            <h3>Mosquito & Fly Killer Spray</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  ₹265 <span>  ₹340 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
           
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Mosquito & Fly Killer Spray">
            <input type="hidden" name="price" value="265">
        </form>
        </div>

        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">

            <img src="images/p5.png" alt="">
            <h3>Hand Sanitizer</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  ₹750 <span>  </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /5L </span>
            </div>
            
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Hand Sanitizer">
            <input type="hidden" name="price" value="750">
    
        </form>
        </div>

        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
          
            <img src="images/p6.png" alt="">
            <h3>Farm Eggs-Table trey</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  ₹185 <span>  ₹210 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /dozen </span>
            </div>
           
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Farm Eggs-Table trey">
            <input type="hidden" name="price" value="185">
        
        </form>
        </div>

        <div class="box">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">

            <img src="images/p7.png" alt="">
            <h3>Chyawanprash - 2X Immunity</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹296<span> ₹349 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
           
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Chyawanprash - 2X Immunity">
            <input type="hidden" name="price" value="296">

        </form>
        </div>

       

    </div>

</section>

<!-- product section ends -->
<!-- deal section starts  -->



<!-- deal section ends -->
<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span> Us </h1>

    <form action="complaints.php" method=post>

        <div class="inputBox">
            <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
            <input type="email" placeholder="Email" id="emial" name="email" class="form-control" required>
        </div>

        <div class="inputBox">
            <input type="number" placeholder="Number"id="number" name="number" class="form-control" required >
            <input type="text" placeholder="Subject"id="subject" name="subject" class="form-control" required>
        </div>

        <textarea placeholder="Message" name="message" id="message" cols="30" rows="10"></textarea>

        <input type="submit" value="Send Message" class="btn" name="admin">

    </form>

</section>

<!-- contact section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="footer-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Easy-Peazy Supermart</a>
            <p>WE PROVIDE YOU FRESH FOODS IN DOOR TO DOOR.
                ALLOWTHE OWNER TO ACCUMULATE MULTIPLE ITEMS AND TO ADJUST QUANTITIES.</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                
            </div>
        </div>
        
        

        <div class="box">
            <h3>Quick Links</h3>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#category">Category</a>
                <a href="#product">Product</a>
                <a href="#deal">Deal</a>
                <a href="#contact">Contact</a>
            </div>
        </div>

        <div class="box">
            <h3>Download App</h3>
            <div class="links">
                <a href="#">Google play</a>
                <a href="#">Window xp</a>
                <a href="#">App Store</a>
            </div>
        </div>

    </div>

    

</section>

<!-- footer section ends -->

    

    
    












<!-- custom js file link  -->
<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        1000:{
            items:1
        },
       
    }
}) 

 </script>
</body>
</html>
