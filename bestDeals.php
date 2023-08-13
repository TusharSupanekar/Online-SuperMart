<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Deals</title>
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
        <img src="images/home_bd.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Diwali Dhamaka Is Here</p>
           
        </div>
    </div>

    <div class="banner">
        <img src="images/home_bd1.jpg" alt="">
        <div class="content">
            <h3>BEST DEALS</h3>
            <p>Hapy Diwali</p>
            
        </div>
    </div>

</section>

<!-- banner section ends -->
<section class="product" id="product">
    <h1 class="heading">Best <span>Deals</span> </h1>
    <div class="box-container">
      <div class="box item">
          <span class="discount">-37%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal1.jpeg" alt="">
          <h3>Cadbury Celebrations</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₹190 <span>₹300 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /unit </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Cadbury Celebrations">
                <input type="hidden" name="price" value="190">
            </form>
      </div>
  
      <div class="box item">
          <span class="discount">-06%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal2.jpeg" alt="">
          <h3>  Rasgulla Tin, 500g</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹103 <span>  ₹110 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /500g </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Rasgulla Tin">
                <input type="hidden" name="price" value="103">
            </form>
          
          
      </div>
  
      <div class="box item">
          <span class="discount">-03%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal3.jpeg" alt="">
          <h3>Soan Papdi 200 g - Pack of 2</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹185 <span> ₹180 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /2 packs </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Soan Papdi 200g">
                <input type="hidden" name="price" value="185">
            </form>
      </div>
      <div class="box item">
          <span class="discount">-40%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal4.jpeg" alt="">
          <h3>Dry Fruits Gift Pack</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₹599 <span>₹1000 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /400g </span>
          </div>
            <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Dry Fruits Gift Pack">
                <input type="hidden" name="price" value="599">
            </form>
      </div>
  
      <div class="box item">
          <span class="discount">-10%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal5.jpeg" alt="">
          <h3> Mix Farsan</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹193 <span>  ₹215 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /350g </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Mix Farsan">
                <input type="hidden" name="price" value="193">
            </form>
      </div>
  
      <div class="box item">
          <span class="discount">-22%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal6.jpeg" alt="">
          <h3>White Sugar, 5 kg </h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹699 <span> ₹899 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /5kg </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="White Sugar">
                <input type="hidden" name="price" value="699">
            </form>
      </div>
      <div class="box item">
          <span class="discount">-23%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal7.jpeg" alt="">
          <h3>Tata Tea Gold, 1kg</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹483 <span>  ₹625 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /kg </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Tata Tea Gold">
                <input type="hidden" name="price" value="483">
            </form>
      </div>
      <div class="box item">
          <span class="discount">-32%</span>
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              
          </div>
          <form action="manage_cart.php" method="POST">
          <img src="images/deal8.jpeg" alt="">
          <h3>Moti Luxury Bath Soap,  150g</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹70 <span> </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">
              <span> /150g </span>
          </div>
          <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Moti Luxury Bath Soap">
                <input type="hidden" name="price" value="70">
            </form>
      </div>
      <div class="box item">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/deal9.png" alt="">
        <h3>Traditional - Authentic - Lantern - KANDIL </h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹799 <span> ₹999 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /unit </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="Traditional - Authentic - Lantern - KANDIL">
                <input type="hidden" name="price" value="799">
            </form>
    </div>
    <div class="box item">
        <span class="discount">-25%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            
        </div>
        <form action="manage_cart.php" method="POST">
        <img src="images/istockphoto-1040166054-612x612.jpg" alt="">
        <h3>MagicBlizz Teracotta Diyas for Puja Large (Pack of 12)</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹180 <span>  ₹240 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /12pcs </span>
        </div>
        <button type="submit" name="Add_To_Card" class="btn btn-info">Add to cart</button>
                <input type="hidden" name="Item_name" value="MagicBlizz Teracotta Diyas for Puja Large">
                <input type="hidden" name="price" value="180">
            </form>
    </div>
   </div>

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

 </script>
</body>
</html>