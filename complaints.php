<?php

session_start();

$servername="127.0.0.1";
$username="root";
$password="";
$dbname="login";

$con = mysqli_connect($servername,$username,$password,$dbname);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['admin']))
    {
       $query1="INSERT INTO `complaints`(`name`, `email`, `number`, `subject`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[subject]','$_POST[message]')";
       $result = mysqli_query($con,$query1);    
       if ($result) {
        echo "<script>alert('Done');window.location.href='index.php';</script>";
       }
    }
      }
?>
