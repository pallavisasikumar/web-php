<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="GET" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="login" name="login">
    </form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pallavi";

$conn = mysqli_connect($servername, $username, $password, $db);

if ($conn) 
{
    if (isset($_REQUEST["login"])) 
    {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $sql = "SELECT * FROM login";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if (($row['username'] == $username) && ($row['password'] == $password)) 
            {
                header("Location: register.php?username=".$username);
                exit();
            } 
            else if(($row['username'] != $username) && ($row['password'] == $password))
            {  
                echo "<script>alert('Incorrect Username ')</script>";
            }
            else if(($row['username'] == $username) && ($row['password'] != $password))
            {  
                echo "<script>alert('Incorrect Password')</script>";
            }
            else 
            {  
                echo "<script>alert('Incorrect Username and Password')</script>";
            }
            
        }
    }

    mysqli_close($conn);
}
?>
</body>
</html>