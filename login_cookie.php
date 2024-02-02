<?php

$conn = mysqli_connect("localhost","root","","amil");



if(!$conn)
{
    die("connection failed ".mysqli_connect_error());
}
else{
    $uname = $_REQUEST['uname'];
    $password =$_REQUEST['pswd'];

    setcookie("uname", $uname, time() + (86400 * 30), "/");


    $qry = "select * from login";
    $res = mysqli_query($conn,$qry);

    while($data=mysqli_fetch_assoc($res)){
        if($data['username']==$uname && $data['password']==$password)
        {
            header("Location: welcome_cookie.php");
        }
        else{
            echo "invalid username or password";
        }
    }
}

?>