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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
  
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./cart.css">
   

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

<div class="container mt-5">
<form action="" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <table class="table text-center table-active" id="payment">
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
                        $query="select * from `order_manager` where Order_id= (select MAX(Order_id) from order_manager)";
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
                            <table class='table text-center  table-active'>
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
    
        <div class="text-center">
    <input type="button-center" class="btn btn-outline-success" id="pay" name="btn" value="Pay Now" onclick="pay_now()">
                    </div>
    </form>
    </div>   

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function pay_now(){
            var abc = document.getElementById('payment');
            var def =abc.rows.item(1).cells.item(5);
            var amt=def.innerHTML;
            console.log(amt);
            var options = {
                "key": "rzp_test_yJRbWRS5onmbJ6", 
                "amount": amt*100,
                "currency": "INR",
                "name": "Easy Peazy",
                "description": "Test Transaction",
                "image": "images/logo2.png",
                "handler": function (response){
                    console.log(response);
            
                    
                    jQuery.ajax({
                        success:function(result){
                            alert("payment completed")
                            window.location.href="index.php";
                            

                        }
                    })
                }
                };
                
                var rzp1=new Razorpay(options);
                rzp1.open();
                
        }  
    </script>


</html>    

