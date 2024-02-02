<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pallavi";
$conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) 
//{
  //  die("Connection failed: " . $conn->connect_error);
//}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $book_number = $_POST['book_number'];
    $title = $_POST['title'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];
    $sql = "INSERT INTO book_details (book_number, title, edition, publisher) VALUES ('$book_number', '$title', '$edition', '$publisher')";

    if ($conn->query($sql) === TRUE) 
    { 
        echo "Book details saved successfully.";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$result = $conn->query("SELECT * FROM book_details");
if ($result->num_rows > 0) 
{
    echo "<h2>Book Details:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Book Number</th><th>Title</th><th>Edition</th><th>Publisher</th></tr>";
    while ($row = $result->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<td>" . $row['book_number'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['edition'] . "</td>";
        echo "<td>" . $row['publisher'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else 
{
    echo "No book details available.";
}
$conn->close();
?>