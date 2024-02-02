<?php
$conn=mysqli_connect('localhost','root','','amil');

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
    $id=$_REQUEST['id'];
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $email=$_REQUEST['email'];

    $qry="INSERT INTO student VALUES('$id','$fname','$lname','$email')";

    if(mysqli_query($conn,$qry))
    {
        echo "success";
    }
    else{
        echo "failed";
    }

}


$qry = "select * from student";
$res = mysqli_query($conn, $qry);

echo "<table border='1'>";
echo "<tr>";
echo "<th>";
echo "id";
echo "</th>";
echo "<th>";
echo "fname";
echo "</th>";
echo "<th>";
echo "lname";
echo "</th>";
echo "<th>";
echo "email";
echo "</th>";
echo "</tr>";

while($data=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>";
    echo $data['id'];
    echo "</td>";
    echo "<td>";
    echo $data['fname'];
    echo "</td>";
    echo "<td>";
    echo $data['lname'];
    echo "</td>";
    echo "<td>";
    echo $data['email'];
    echo "</td>";
    echo "</tr>";
}

?>
