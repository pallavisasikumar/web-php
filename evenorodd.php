<html>
<head>
    <title>number</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="num"><br>
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["num"];
        if (!empty($x)) {
            if ($x == 0) {
                echo "The number is zero";
            } elseif ($x % 2 == 0) {
                echo "The number is even";
            } else {
                echo "The number is odd";
            }
        } else {
            echo "Please enter a number.";
        }
    }
    ?>
</body>
</html>
