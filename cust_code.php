<?php
$conn=mysqli_connect("localhost","root","","customer");

$cust_id=$_POST['cust_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pwd'];
$address=$_POST['address'];

$qry="INSERT INTO cust VALUES('$cust_id','$fname','$lname','$email','$phone','$password','$address')";
mysqli_query($conn,$qry);

echo "<script>alert('sucsessfully registered');window.location.href='login.php'</script>";

?>
