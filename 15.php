<html>
    <head>
        <title>odd or even</title>
    </head>
    <body>
        <h2>enter the number</h2>
        <form method="get">
            enter the number:<input type="text" name="n"><br>
            <input type="submit" value="check">
        </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {

        $x=$_GET["n"];
        if($x==0)
        {
            echo "the number is zero";
        }
        elseif($x%2==0)
        {
            echo "the number is even";
        }
        else{
            echo "the number is odd";
        }
    }
        ?>
    </body>
</html>