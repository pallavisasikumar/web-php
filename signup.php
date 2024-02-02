<html>
    <head><title></title></head>

<body>
    <h2>login form</h2>
    <form method="GET" action="">
        <label for="username">username</label>
        <input type="text" name="username" required><br>
        <label for="password">password</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="login" name="login" required><br>
    </form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pallavi";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn) 
{

    if (isset($_REQUEST["login"])) 
    {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $sql = "SELECT * FROM users ";
        $result = mysqli_query($conn,$sql);
    }
    while($row=mysqli_fetch_array($result))
    {
        if(($row['username']==$username)&&($row['password']==$password))
        {
            header("Location:welcome.php");
            exit;
        }
        elseif(($row['username']!=$username)&&($row['password']==$password))
        {
            echo "<script>alert('incorrect username')</script>";
        }
        elseif(($row['username']==$username)&&($row['password']!=$password))
        {
            echo "<script>alert('incorrect password')</script>";
        }
        else
        {
            echo "<script>alert('incorrect username and password')</script>";
        }
    }
     $conn->close();
}
?>
</body>
</html>