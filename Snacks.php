<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Staples and Snacks</title>
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

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#product">Product</a>
            <a href="bestDeals.php">Deals</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            
            <a href="login.php" class="fas fa-user-circle"></a><li>
           
			
        </div>

    </div>

</header>
<!-- header section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images/home_snacks1.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Deals made especially for you</p>
           
        </div>
    </div>

    <div class="banner">
        <img src="images/home_snack2.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Upto 20% off</p>
            
        </div>
    </div>

</section>

<!-- banner section ends -->


<section class="product" id="product">
  <h1 class="heading">Daily Staples <span></span></h1>
  <div class="box-container owl-carousel owl-theme">
    <div class="box item">
        <span class="discount">-17%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat21.png" alt="">
        <h3>Multigrains Atta/godihittu 5kg</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">₹249 <span>₹300 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
       
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Multigrains Atta/godihittu">
            <input type="hidden" name="price" value="249">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount">-25%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat22.jpg" alt="">
        <h3> Sunflower Refined Oil 5l</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹806 <span>  ₹1075 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /L </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Sunflower Refined Oil">
            <input type="hidden" name="price" value="806">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount">-30%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat23.jpg" alt="">
        <h3>Royal Peanuts-Raw 1kg</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹140 <span> ₹200 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Royal Peanuts-Raw">
            <input type="hidden" name="price" value="140">
    
        </form>
    </div>
    <div class="box item">
        <span class="discount">-18%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat27.jpg" alt="">
        <h3>Organic Ghee</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">₹257 <span>₹275 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /500ml </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Organic Ghee">
            <input type="hidden" name="price" value="257">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount">-36%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat28.jpg" alt="">
        <h3> Almomds</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹125 <span>  ₹195 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /100g </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Almomds">
            <input type="hidden" name="price" value="125">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount">-33%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat29.jpg" alt="">
        <h3>Rajma</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹30 <span> ₹45 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /200g </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Rajma">
            <input type="hidden" name="price" value="30">
    
        </form>
    </div>
    <div class="box item">
        <span class="discount"></span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat210.jpg" alt="">
        <h3>Tata-Salt</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹22 <span>  </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Tata-Salt">
            <input type="hidden" name="price" value="22">
    
        </form>
    </div>
    <div class="box item">
        <span class="discount">-32%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat211.jpg" alt="">
        <h3>Organic toor dal</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹272 <span> ₹399 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /2kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Organic toor dal">
            <input type="hidden" name="price" value="272">
    
        </form>
    </div>
 </div>

<h1 class="heading">Snacks <span></span></h1>
  <div class="box-container owl-carousel owl-theme">
    <div class="box item">
        <span class="discount">-06%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
    
        <img src="images/cat24.jpg" alt="">
        <h3>2-Minute Instant Noodles</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹90 <span>  ₹96 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /unit </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="2-Minute Instant Noodles">
            <input type="hidden" name="price" value="90">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount">-03%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat25.jpg" alt="">
        <h3>Potato Chips - Fusion Chutney</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹96 <span>  ₹99 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /unit </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="2-Minute Instant Noodles">
            <input type="hidden" name="price" value="96">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount"></span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat26.jpg" alt="">
        <h3>Fruit N Nut Fantasy Ice Cream</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹200 <span>   </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Fruit N Nut Fantasy Ice Cream">
            <input type="hidden" name="price" value="200">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount">-16%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat212.png" alt="">
        <h3>French Fries</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹242 <span>  ₹285 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /1.5kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="French Fries">
            <input type="hidden" name="price" value="242">
    
        </form>
       
    </div>

    <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat213.png" alt="">
        <h3>Tomato Soup</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹44 <span>  ₹55 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /53g </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Tomato Soup">
            <input type="hidden" name="price" value="44">
    
        </form>
    </div>

    <div class="box item">
        <span class="discount"></span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat214.jfif" alt="">
        <h3>Lotte Chocopie</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹140 <span>   </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /1 pack </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Lotte Chocopie">
            <input type="hidden" name="price" value="140">
    
        </form>
    </div>
    <div class="box item">
        <span class="discount">-24%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat215.jpg" alt="">
        <h3>Bikaneri Bhujia</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹276 <span>  ₹300 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Bikaneri Bhujia">
            <input type="hidden" name="price" value="276">
    
        </form>
    </div>
    <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat216.jpg" alt="">
        <h3>Tomato Ketchup</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹132 <span>  ₹165 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Tomato Ketchup">
            <input type="hidden" name="price" value="132">
    
        </form>
    </div>

</section>
<!-- product section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="footer-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Easy-Peazy Supermart</a>
            <p>WE PROVIDES YOU FRESH FOODS IN DOOR TO DOOR.
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
                <a href="index.html">Home</a>
                <a href="#">Category</a>
                <a href="#">Product</a>
                <a href="#">Deal</a>
                <a href="#">Contact</a>
            </div>
        </div>

        <div class="box">
            <h3>Download App</h3>
            <div class="links">
                <a href="#">Google Play</a>
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
$('.box-container').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:4
        }
    }
}) 
 </script>
</body>
</html>