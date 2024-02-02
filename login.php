<?php
session_start();
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pallavi";
$conn = new mysqli($host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
}
if ($result->num_rows > 0) 
{
$row = $result->fetch_assoc();
 if ($password == $row["password"]) 
 {
header("Location: welcome.php");
exit();
} 
else 
{
$error = "Incorrect password"; }
} else {
$error = "Incorrect username";
}
 $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
<h2>Login</h2>
<?php if (isset($error)) : ?>
<p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<form action="" method="post">
<label for="username">Username:</label>
<input type="text" name="username" required><br>
<label for="password">Password:</label>
<input type="password" name="password" required><br>
<input type="submit" value="Login">
</form>
</body>
</html>