<?php

session_start();

$conn=mysqli_connect("localhost","root","","customer");

$email=$_POST['email'];
$pwd=$_POST['pwd'];

$qry="SELECT * FROM cust WHERE email='$email' AND password='$pwd'";


$result=mysqli_query($conn,$qry);
$value=mysqli_fetch_assoc($result);

$_SESSION['email']=$value['email'];

echo "customer id";
echo $value['cust_id'];
echo "<br>";
echo "fname";
echo $value['fname'];
echo "<br>";
echo "lname";
echo $value['lname'];
echo "<br>";
echo "email";
echo $_SESSION['email'];
echo "<br>";
echo "phone";
echo $value['phone'];
echo "<br>";
echo "password";
echo $value['password'];
echo "<br>";
echo "address";
echo $value['address'];
echo "<br>";



?>