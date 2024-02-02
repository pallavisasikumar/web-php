<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pallavi";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$book_number = $_POST['book_number'];
$title = $_POST['title'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];
$sql = "INSERT INTO book_details (book_number, title, edition, publisher) VALUES 
('$book_number', '$title', '$edition', '$publisher')";
if ($conn->query($sql) === TRUE) { 
echo "Book details saved successfully.";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$result = $conn->query("SELECT * FROM book_details");
if ($result->num_rows > 0) {
echo "<h2>Book Details:</h2>";
echo "<table border='1'>";
echo "<tr><th>Book Number</th><th>Title</th><th>Edition</th><th>Publisher</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row['book_number'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['edition'] . "</td>";
echo "<td>" . $row['publisher'] . "</td>";
echo "</tr>";
}
echo "</table>";
} 
else {
echo "No book details available.";
}
$conn->close();
?>
<html>
<head>
<title>Book Details Form</title>
</head>
<body>
<form action="details.php" method="post">
<label for="book_number">Book Number:</label>
<input type="text" id="book_number" name="book_number" required><br>
<label for="title">Title:</label>
<input type="text" id="title" name="title" required><br>
<label for="edition">Edition:</label>
<input type="text" id="edition" name="edition" required><br>
<label for="publisher">Publisher:</label>
<input type="text" id="publisher" name="publisher" required><br>
<button type="submit">Submit</button>
</form>
</body>
</html>
