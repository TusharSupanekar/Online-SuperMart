<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
  
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

</head>
<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Easy-Peazy Supermart</a>

    </div>

    <div class="header-2">


        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#product">Product</a>
            <a href="bestDeals.php">Deals</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            
            <a href="login.php" class="fas fa-user-circle"></a>
           
			
        </div>

    </div>

</header>
<br><br><br>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h1 style= "font-family: sans-serif;background: rgb(187,187,245);display: flex;align-items: center;justify-content: center;margin-top:30px;margin-bottom:30px;">MY CART</h1>
            </div>

            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                       
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                               
                                echo"
                                <tr>
                                <td>$sr</td>
                                <td>$value[Item_name]</td>
                                <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                    <input class='text-center iquantity' onchange='this.form.submit();' name='Quantity' type='number' value='$value[Quantity]' min='1' max='10'>
                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                </form>
                                 
                                
                                </td>
                                
                                <td class='itotal'></td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                
                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                </form>
                                </td>
                                
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                



                

            </div>
            
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                <h4 style="color:black;">Total:</h4>
                <h5 style="color:black; text-align:right;" id="gtotal"> </h5>
              
                <br>
                <?php
                if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
                {
                ?>
                <form action="purchase.php" method="POST">
                
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" id="phone_no" name="phone_no" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text"  id="address" name="address" class="form-control" required>
               
                    </div>
                    <input type='hidden' name="amount" id='total' value="">
                    <br>
                    <button type="submit" class="btn btn-primary" name="purchase" value="Submit" onclick="">Submit</button>
                    
                </form>  
                <?php
                }
                ?>


            </div>
            </div>

        </div>
    </div>
    


    
    <script>

        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        var total=document.getElementById('total');
        
      
        function subTotal()
        {
            gt=0;
            for(i=0;i<iprice.length;i++)
            {

                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
            total.value=gt;
            
           
        }
        
        subTotal();



      

</script>
</body>

   

</html>
