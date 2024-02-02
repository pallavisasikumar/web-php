<?php
$conn=mysqli_connect('localhost','root','','lib');


if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    setcookie('username',$username,time()+(86400*30),"/");
    
    $qry="SELECT * FROM login";
    $res=mysqli_query($conn,$qry);

    while($data=mysqli_fetch_assoc($res))
    {
        if($data['username']==$username && $data['password']==$password)
        {
            header("location:hi.php");
        }
        else
        {
            echo "invalid username and password";
        }
    }
}
?>