<html>
    <head><title>factorial</title></head>
    <body>
        <form method="post">
            enter a number:<input type="text" name="num"><br>
            <input type="submit" value="click here">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num=$_POST["num"];
    if($num==0||$num==1)
    {
        echo "the factorial of $num is 1";
    }
    else
    {
        $fact=1;
        for($i=1;$i<=$num;$i++)
        {
            $fact=$fact*$i;
        }
        echo "the factorial of $num is $fact";
    }
}
?>
</body>
    </html>