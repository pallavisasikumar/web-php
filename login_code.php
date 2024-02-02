<?php
#session_start();
$conn=mysqli_connect('localhost','root','','register');


    $email=$_POST['email'];
    $password=$_POST['password'];

    $qry=" SELECT * FROM register WHERE email='$email' AND password='$password' ";

    $result=mysqli_query($conn,$qry);

    if (mysqli_num_rows($result) > 0) 
    {
    $value=mysqli_fetch_assoc($result);

    #$_SESSION['email']=$value['email'];
    setcookie('email',$email,time()+(86400*30),"/");
    
    echo "cust_id :  ";
    echo $value['cust_id'];
    echo "<br>";
    echo "fname :  ";
    echo $value['fname'];
    echo "<br>";
    echo "lname :  ";
    echo $value['lname'];
    echo "<br>";
    echo "email :  ";
    echo $_COOKIE['email'];
    echo "<br>";
    echo "phone :  ";
    echo $value['phone'];
    echo "<br>";
    echo "password :  ";
    echo $value['password'];
    echo "<br>";
    echo "address :  ";
    echo $value['address'];
    echo "<br>";
    } else 
    {
        echo "No matching records found for the given email and password.";
    }
    mysqli_close($conn);


?>