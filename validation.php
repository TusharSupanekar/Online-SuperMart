<?php

session_start();


$servername="127.0.0.1";
$username="root";
$password="";
$dbname="login";

$con = mysqli_connect($servername,$username,$password,$dbname);


$email=$_POST['email'];
$password =$_POST['password'];


$s="select * from registertable where email= '$email' && password='$password'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num > 0)
{
    header('location:index.php');
    echo "login successful";
}
else{
    echo "<script>alert('Please check the credentials');
    window.location.href='login.php';
    </script>";
}
?>
