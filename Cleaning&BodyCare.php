<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleaning and Body Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <img src="images/home_clean.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Everything you need, on a budget</p>
           
        </div>
    </div>

    <div class="banner">
        <img src="images/home_care.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Upto 40% off</p>
            
        </div>
    </div>

</section>

<!-- banner section ends -->
<!-- product section starts -->

<section class="product" id="product">
  <h1 class="heading">Cleaning <span></span></h1>
    <div class="box-container owl-carousel owl-theme">
        <div class="box item">
            <span class="discount">-19%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat31.jpg" alt="">
            <h3> Dettol - Bottle of 1L Antiseptic Liquid-happy home</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹360 <span>₹291 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /L </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Dettol - Bottle of 1L Antiseptic Liquid">
            <input type="hidden" name="price" value="360">
        </form>
            
        </div>

        <div class="box item">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat32.jpeg" alt="">
            <h3>Tide detergent- extra power</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹600<span>  ₹750 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> 7kg+3kg free </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Tide detergent- extra power">
            <input type="hidden" name="price" value="600">
        </form>
        </div>

        <div class="box item">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat33.jpg" alt="">
            <h3>Ambi pur Air Effect Lavender Bouquet Air Freshener - 275 g</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹168 <span> ₹280 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> 275g </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Ambi pur Air Effect Lavender Bouquet Air Freshener ">
            <input type="hidden" name="price" value="168">
        </form>
           
        </div>

        <div class="box item">
            <span class="discount">-10%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat34.jpg" alt="">
            <h3>Himalaya Purifying Neem Face Wash-150ml</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹153 <span>  ₹170 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Himalaya Purifying Neem Face Wash">
            <input type="hidden" name="price" value="153">
        </form>
        </div>

        <div class="box item">
            <span class="discount">-22%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat35.jpg" alt="">
            <h3>Gillette Mach 3 Bladed Shaving Cartridges/Razor </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹300<span>  ₹385 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="HGillette Mach 3 Bladed Shaving Cartridges/Razor">
            <input type="hidden" name="price" value="300">
        </form>
           
        </div>

        <div class="box item">
            <span class="discount">-10%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat36.jpg" alt="">
            <h3>Skin Whitening & Brightening Gel Creme-SPF 25</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹535 <span>  ₹595 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>

            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Skin Whitening & Brightening Gel Creme-SPF 25">
            <input type="hidden" name="price" value="535">
        </form>

        </div>
    </div>
  <h1 class="heading">Body Care <span></span></h1>
    <div class="box-container owl-carousel owl-theme">   
        <div class="box item">
            <span class="discount">-10%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat34.jpg" alt="">
            <h3>Himalaya Purifying Neem Face Wash-150ml</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹153 <span>  ₹170 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
           
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Himalaya Purifying Neem Face Wash">
            <input type="hidden" name="price" value="153">
        </form>

        </div>

        <div class="box item">
            <span class="discount">-22%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat35.jpg" alt="">
            <h3>Gillette Mach 3 Bladed Shaving Cartridges/Razor </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹300<span>  ₹385 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Gillette Mach 3 Bladed Shaving Cartridges/Razor ">
            <input type="hidden" name="price" value="300">
        </form>
        </div>

        <div class="box item">
            <span class="discount">-10%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat36.jpg" alt="">
            <h3>Skin Whitening & Brightening Gel Creme-SPF 25</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹535 <span>  ₹595 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Skin Whitening & Brightening Gel Creme-SPF 25">
            <input type="hidden" name="price" value="535">
        </form>
        </div>
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
                <a href="index.php">Home</a>
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