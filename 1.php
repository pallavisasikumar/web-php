<html>
    <body>
        <form method="post">
            enter the units consumed : <input type="text" name="unit"><br>
            <input type="submit" value="calculate">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $unit=$_POST["unit"];

    if(!is_numeric($unit)){
        echo "enter a valid integer unit";
    }
    else{
        $billamount=0;

        if($unit<=50)
        {
            $billamount=$unit*3.50;
        }
        else if($unit<=150){
            $billamount=(50*3.50) + (($unit-50)*4.00) ;
        }
        else if($unit<=250)
        {
            $billamount=(50*3.50)+(100*4.00)+(($unit-150)*5.20);
        }
        else{
            $billamount=(50*3.50)+(100*4.00)+(($unit-250)*6.20);
        }
        echo "the electricty bill for $unit is $billamount";
    }
 
    }

?>
</body>
    </html>