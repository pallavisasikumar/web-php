<html>
    <body>
        <form method="post">
            check pallindrome:<input type="text" name="pal"><br>
            <input type="submit" value="check">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $input=$_POST["pal"];

    $reverse=strrev($input);

    if($input==$reverse)
    {
        echo "the entered input is pallindromic";
    }
    else
    {
        echo "not pallindrom";
    }
}
?>
</body>
    </html>