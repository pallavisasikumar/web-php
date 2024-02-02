<?php
$conn=mysqli_connect("localhost","root","","customer");

$cust_id=$_POST['cust_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$adress=$_POST['adress'];

$qry="INSERT INTO customer VALUES('$cust_id','$fname','$lname','$email','$phone','$password','$adress')";

mysqli_query($conn,$qry);

echo "<script>alert('successfully registered');window.location.href='login.php'</script>";

?>