<?php
$conn=mysqli_connect('localhost','root','','register');


    $cust_id=$_POST['cust_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $address=$_POST['address'];

    $qry="INSERT INTO register VALUES(' $cust_id','$fname','$lname','$email','$phone','$password','$address')";

    mysqli_query($conn,$qry);

    echo "<script>alert('succsessfully registered');window.location.href='login.php'</script>";

?>