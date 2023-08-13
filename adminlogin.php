<?php

session_start();


$servername="127.0.0.1";
$username="root";
$password="";
$dbname="login";

$con = mysqli_connect($servername,$username,$password,$dbname);


$email=$_POST['Email'];
$password =$_POST['Password'];


$s="select * from adminlogin where Email= '$email' && Password='$password'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num > 0)
{
    header('location:adminpage.php');
    echo "login successful";
}
else{
    echo "<script>alert('Please check once');
    window.location.href='adminlogin.php';
    </script>";
}
?>