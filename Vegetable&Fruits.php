<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables and Fruits</title>
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
<!-- product section starts -->


<section class="product" id="product">
  <h1 class="heading">Vegetables <span></span></h1>
        
      
    <div class="box-container owl-carousel owl-theme">
      
        <div class="box item">
         <span class="discount">-14%</span>
            <div class="icons">
               <a href="#" class="fas fa-heart"></a>
               <a href="#" class="fas fa-share"></a>
                     
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat11.png" alt="">
            <h3>Fresh Palak</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹30 <span>₹35 </span> </div>
            <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /g </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
            <input type="hidden" name="Item_name" value="Fresh Palak">
            <input type="hidden" name="price" value="30">
    
        </form>
        </div>
      
        <div class="box item">
                  <span class="discount">-26%</span>
                  <div class="icons">
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-share"></a>
                      
                  </div>
                  <form action="manage_cart.php" method="POST">
                  <img src="images/at13.png" alt="">
                  <h3>Broccoli</h3>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price"> ₹50 <span> ₹68 </span> </div>
                  <div class="quantity">
                      <span>quantity : </span>
                      <input type="number" min="1" max="1000" value="1">
                      <span> /g </span>
                  </div>
                  <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Broccoli">
                  <input type="hidden" name="price" value="50">
                </form>
            </div>
      
        <div class="box item">
                  <span class="discount">-15%</span>
                  <div class="icons">
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-share"></a>
                      
                  </div>
                  <form action="manage_cart.php" method="POST">
                  <img src="images/cat17.png" alt="">
                  <h3>Tomatos-Hybrid</h3>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price"> ₹25 <span>  ₹30 </span> </div>
                  <div class="quantity">
                      <span>quantity : </span>
                      <input type="number" min="1" max="1000" value="1">
                      <span> /kg </span>
                  </div>
                  <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Tomatos-Hybrid">
                  <input type="hidden" name="price" value="25">
                </form>
        </div>

        <div class="box item">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat19 (1).webp" alt="">
            <h3>Onion</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹30 <span>  ₹37 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Onion">
                  <input type="hidden" name="price" value="30">
                </form>
        </div>
        
        <div class="box item">
            <span class="discount">-41%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat110.jpg" alt="">
            <h3>Green Capsicum</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹29 <span>  ₹40 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /500g </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Green Capsicum">
                  <input type="hidden" name="price" value="29">
                </form>
        </div>
    
        <div class="box item">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat111.jpg" alt="">
            <h3>Cabbage</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹10 <span>  ₹15 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /1pc </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Cabbage">
                  <input type="hidden" name="price" value="10">
                </form>
        </div>

        <div class="box item">
            <span class="discount">-48%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat112.jpg" alt="">
            <h3>Carrot</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹34 <span>  ₹65 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /500g </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Carrot">
                  <input type="hidden" name="price" value="34">
                </form>
        </div>
        <div class="box item">
            <span class="discount">-31%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                
            </div>
            <form action="manage_cart.php" method="POST">
            <img src="images/cat113.jfif" alt="">
            <h3>Fresh Lemon</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹26 <span>  ₹37</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /250g </span>
            </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Fresh Lemon">
                  <input type="hidden" name="price" value="26">
                </form>
        </div>
      
    </div>
  <h1 class="heading">Fruits <span></span></h1>
  <div class="box-container owl-carousel owl-theme">
    <div class="box item">
        <span class="discount">-23%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat12.png" alt="">
        <h3>Organic Banana</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹30 <span>  ₹40 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /Dozen </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                  <input type="hidden" name="Item_name" value="Organic Banana">
                  <input type="hidden" name="price" value="30">
                </form>
    </div>
    
    <div class="box item">
        <span class="discount">-50%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat14.png" alt="">
        <h3>Kashmiri Apple-Red delicious</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹150 <span>  ₹300 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Kashmiri Apple-Red delicious">
        <input type="hidden" name="price" value="150">
                </form>
    </div>

    <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat16.png" alt="">
        <h3>Oranges-Imported</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">₹144 <span>  ₹180 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /kg </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Oranges-Imported">
        <input type="hidden" name="price" value="144">
    </form>
    </div>
    <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat114.jpg" alt="">
        <h3>Pomegranet</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹119 <span>  ₹148 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /800g </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Pomegranet">
        <input type="hidden" name="price" value="119">
    </form>
    </div>
    
    <div class="box item">
        <span class="discount">-38%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat115.jpg" alt="">
        <h3>Kiwi</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹69 <span>  ₹111 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /3pcs </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Kiwi">
        <input type="hidden" name="price" value="69">
    </form>
    </div>

    <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat116.jfif" alt="">
        <h3>Plum</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">₹147 <span>  ₹183 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /500g </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Plum">
        <input type="hidden" name="price" value="147">
    </form>
    </div>
    <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat117.jpg" alt="">
        <h3>Pear</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">₹73 <span>  ₹91 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /500g </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Pear">
        <input type="hidden" name="price" value="73">
    </form>
    </div>
    <div class="box item">
        <span class="discount">-40%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/cat118.jpg" alt="">
        <h3>Papaya</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price">₹28 <span>  ₹47 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /1pcs </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
        <input type="hidden" name="Item_name" value="Papaya">
        <input type="hidden" name="price" value="28">
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
               ALLOWTHE OWNER TO ACCUMULATE MULTIPLE ITEMS AND TO ADJUST QUANTITIES.
            </p>
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