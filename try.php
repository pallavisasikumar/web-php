<html>
    <head>
        <title>Login form</title>
    </head>
    <body>
        <h2>Login here</h2>
        <form method="post" action="">
            <label for="username" >Username</label>
            <input type="text" name="username" required><br><br>

            <label for="password">password</label>
            <input type="text" name="password" required><br><br>

            <input type="submit" value="login" name="login">
        </form>
        <?php

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="pallavi";

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        if($conn)
        {
            if(isset($_REQUEST["login"]))
            {
                $username=$_REQUEST["username"];
                $password=$_REQUEST["password"];

                $sql="SELECT * FROM login";
                $result=mysqli_query($conn,$sql);

                while($row=mysqli_fetch_array($result))
                {
                    if(($row['username']==$username)&&($row['password']==$password))
                    {
                        header("Location:wlcm.php?username=".$username);
                        exit();
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
                        echo "<script>alert('incorrect password and username')</script>";
                    }
                }
            }
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

