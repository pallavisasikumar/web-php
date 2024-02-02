<html>
    <body>
        <h2>Fibonacci series</h2>
        <form action="" method="post">
        Enter the Limit: <input type="text"name="number">
        <input type="submit" value="Enter" name="submit">
        </form>

   <?php
         if(isset($_POST["submit"])){

            $x=$_POST["number"];
            $first=0;
            $second=1;
            if($x==1){
                echo"Fibonacci Series: $first";
            }
            elseif($x>1){
                echo"Fibonacci Series : ";
                echo"$first";
                echo"$second";
                for($i=2;$i<$x;$i++)
                {
                   $temp=$first;
                   $first=$second;
                   $second=$temp+$first;
                   echo"$second";
                }
            }

         }

   ?>

        
    </body>

    
</html>