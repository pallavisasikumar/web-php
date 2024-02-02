<html>
</head></head>
<body>
<h2>welcome</h2>
<?php

$username=isset($_GET['username']) ? htmlspecialchars($_GET['username']):'';
 echo "<p>welcome,$username!</p>";
    
?>
</body>
</html>