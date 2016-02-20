<?php
//include config and function files here
include 'config.php';
include 'functions.php';
//session section starts here
 session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

if(check_user_creds($username,$password)) {
    set_the_session($username);
}
else {
    $status = "Wrong username and password";
}
}
?>

<html>
<head>
    <title>Login Page</title>
    <style>
        ul li {margin:10px 0; list-style:none;}
        ul li label{display:block;}
    </style>
</head>
<body>
<h1>Hello, Please use this form</h1>

<form action="login.php" method="post">
<ul>
    <li>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <input type="submit" value="Login">
    </li>
<li>

</li>
</ul>
    <?php if(isset($status)){echo $status ;} ?>
</form>
</body>
</html>

