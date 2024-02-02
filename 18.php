<?php
$conn=mysqli_connect('localhost','root','','lib');

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    $book_no=$_REQUEST['book_no'];
    $title=$_REQUEST['title'];
    $edition=$_REQUEST['edition'];
    $publisher=$_REQUEST['publisher'];

    $qry="INSERT INTO book VALUES('$book_no','$title','$edition','$publisher')";

    if(mysqli_query($conn,$qry))
    {
        echo "success";
    }
    else
    {
        echo "failed";
    }

    $qry="SELECT * FROM book";
    $res=mysqli_query($conn,$qry);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>";
    echo "book number";
    echo "</th>";
    echo "<th>";
    echo "title";
    echo "</th>";
    echo "<th>";
    echo "edition";
    echo "</th>";
    echo "<th>";
    echo "publisher";
    echo "</th>";
    echo "</tr>";


    while($data=mysqli_fetch_assoc($res))
    {
        echo "<tr>";
        echo "<td>";
        echo $data['book_no'];
        echo "</td>";
        echo "<td>";
        echo $data['title'];
        echo "</td>";
        echo "<td>";
        echo $data['edition'];
        echo "</td>";
        echo "<td>";
        echo $data['publisher'];
        echo "</td>";
        echo "</tr>";
    }


}
?>