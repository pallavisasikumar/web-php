<html>
    <body>
        <?php
        $x=$_GET["num"];
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
        ?>
    </body>
</html>