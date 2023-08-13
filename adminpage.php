<?php
session_start();
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="login";

$con = mysqli_connect($servername,$username,$password,$dbname);

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
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Easy-Peazy Supermart</a>
        <h1 style="color: red;"> ADMIN</h1>
        
        

    </div>

    <div class="header-2">

       

        <nav class="navbar">
            <a href="#">ADMIN HOME</a>
            <a href="admincomplaints.php">COMPLAINTS<a>
          
        </nav>

        <div class="icons">
            
            <a href="logout.php" class="fas fa-user-circle">&nbspLOGOUT</a>
           
        </div>

    </div>

</header>

<div class="container mt-5">
<form action="" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <table class="table text-center table-info" id="payment">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Address</th>
                        <th scope="col">Orders</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                       
                        <?php
                        $query="select * from `order_manager` ";
                        $user_result=mysqli_query($con,$query);
                       
                        while($user_fetch=mysqli_fetch_assoc($user_result))
                        {
                           echo"
                           <tr> 
                            <td>$user_fetch[Order_id]</td>
                            <td>$user_fetch[Full_Name]</td>
                            <td>$user_fetch[Phone_No]</td>
                            <td>$user_fetch[Address]</td>
                            <td>
                            <table class='table text-center  table-info'>
                            <thead>
                            <tr>
                            <td scope='col'>Item Name</td>
                            <td scope='col'>Price</td>
                            <td scope='col'>Quantity</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
                            $order_query="SELECT * FROM `user_orders` where `Order_id`='$user_fetch[Order_id]'";
                            $order_result=mysqli_query($con,$order_query);
                            while($order_fetch=mysqli_fetch_assoc($order_result))
                            {
                                echo"
                                <tr>
                                <td>$order_fetch[Item_name]</td>
                                <td>$order_fetch[price]</td>
                                <td>$order_fetch[Quantity]</td>
                                </tr>
                                ";

                            }
                            echo"
                            </tbody>
                            </table>
    
                            </td>
                            <td>$user_fetch[amount]</td>
                            
                            </tr>
                            "; 
                           
                        }
                    
                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    
    
   
    </form>
    </div>

</body>
</html>