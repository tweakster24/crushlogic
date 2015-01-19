<?php
session_start();

echo "hello ".$_SESSION['name'];

?>

<html>
<body>
<br>
<a href="entercrush.php">Enter Crush</a><br>
<a href="showcrush.php">Show Crush</a><br>
<a href="logout.php">Logout</a><br>
</body>


</html>