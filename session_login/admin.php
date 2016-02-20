
<?php
include 'functions.php';
session_start();
if (!check_the_session()){
header("Location: login.php");
session_destroy();
die();
}
?>

<html>
<head>
    <title>Admin Area</title>
</head>
<body>
<h1>This is a <?php echo $_SESSION['username']; ?> area</h1>
<br>
<a href="logout.php">Logout</a>
</body>
</html>