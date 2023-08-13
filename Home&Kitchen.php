<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home and Kitchen</title>
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
        <img src="images/home_h.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>A New Sale Is Here</p>
           
        </div>
    </div>

    <div class="banner">
        <img src="images/home_kitchen.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Upto 35% off</p>
            
        </div>
    </div>

</section>

<!-- banner section ends -->


<section class="product" id="product">
  <h1 class="heading">Home <span>& Kitchen</span></h1>
    <div class="box-container owl-carousel owl-theme">
        <div class="box item">
            <span class="discount">-35%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat41.jpeg" alt="">
            <h3> Borosil glass bowl- 6pcs</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹224 <span>₹241 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> 1set </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value=" Borosil glass bowl">
            <input type="hidden" name="price" value="224">
        </form>
        </div>

        <div class="box item">
            <span class="discount">-25%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat42.jpeg" alt="">
            <h3>Chopping- Board-wooden</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹750 <span>  ₹999 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Chopping- Board-wooden">
            <input type="hidden" name="price" value="750">
        </form>
           
        </div>

        <div class="box item">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat43.jpg" alt="">
            <h3>Non-Stick Pan/Vagaria</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹800 <span> ₹1000 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Non-Stick Pan/Vagaria">
            <input type="hidden" name="price" value="800">
        </form>
        </div>

        <div class="box item">
            <span class="discount">-06%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat44.jpg" alt="">
            <h3> Cotton Oven Glove, 1 pc</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹235 <span>  ₹240 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /1 pair </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Cotton Oven Glove">
            <input type="hidden" name="price" value="235">
        </form>
            
        </div>
    </div>
<h1 class="heading"> <span></span></h1>
    <div class="box-container owl-carousel owl-theme">

        <div class="box item">
            <span class="discount">-10%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat45.webp" alt="">
            <h3>Spin Mop Refill + Mop Stick </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹1350 <span>  ₹1500 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /unit </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Spin Mop Refill + Mop Stick">
            <input type="hidden" name="price" value="1350">
        </form>
           
        </div>

        <div class="box item">
            <span class="discount"></span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
               
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat46.jpg" alt="">
            <h3> Sponge Wipe - Large</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹390 <span>  </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /2pcs </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value=" Sponge Wipe - Large">
            <input type="hidden" name="price" value="390">
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