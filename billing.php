<?php 
session_start();
header('location:checkout.php');
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful!";
}
else{
    echo "No Connection!";
}

mysqli_select_db($con, "titaneyedb");

$name = $_POST['name'];
$qty = $_POST['qty'];
$price = $_POST['price'];



 $insert = "insert into customer(name,email,city,address,zip,country) values('$name','$qty','$price')";
    mysqli_query($con, $insert);

?>