<?php
session_start();
session_destroy();
$_SESSION = array();
?>

<html>
<head>
    <title>
        Logout
    </title>
    <body>
<h3>
    You have been successfully signed out.
</h3>
<a href="index.php">Go to the main page</a>
</body>
</head>
</html>
