 <?php

session_start();

$servername="127.0.0.1";
$username="root";
$password="";
$dbname="login";

$con = mysqli_connect($servername,$username,$password,$dbname);

$name = $_POST['name'];
$email=$_POST['email'];
$password =$_POST['password'];


$s="select * from registertable where email= '$email'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num > 0 ){

    echo "<script>alert('Email already exist');
    window.location.href='login.php';
    </script>";

}
else{
    $reg="insert into registertable(name,email,password) values('$name','$email','$password')";
    $rs=mysqli_query($con,$reg);
    if($rs)
    {
    echo "<script>alert(' Registration Successfull');
    window.location.href='login.php';
    </script>";
}
}

?>