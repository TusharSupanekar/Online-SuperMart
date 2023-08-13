<?php

session_start();

$servername="127.0.0.1";
$username="root";
$password="";
$dbname="login";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
     
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`,`amount`) VALUES ('$_POST[name]','$_POST[phone_no]','$_POST[address]','$_POST[amount]')";
       
        if(mysqli_query($con,$query1))
        {   
            $Order_id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_name`, `price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt){
               
                mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_name,$price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_name=$values['Item_name'];
                    $price=$values['price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);

                echo"<script>
                alert('Order Placed');
                window.location.href='payment.php';
                </script>";
                
                
            }
            else{
                echo"<script>
                alert('SQL QUERY PREPARE ERROR');
                window.location.href='Card.php';
                <script>";
            }
        }
        else{
            echo"<script>
            alert('SQL ERROR');
            window.location.href='Card.php';
            <script>";
        }

    }
}

?>