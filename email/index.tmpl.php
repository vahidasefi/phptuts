<!DOCTYPE html>
<html>
<head>
    <title>The email list registration</title>
    <style>
        li{list-style: none;
            margin:10px 0;}
        .error{color: red; font-style: italic;}
        .success{color:green; font-style: italic;}
    </style>
</head>
<body>
<form action="" method="post">
<ul>
    <li>
    <label for="name">Input your name: </label>
    <input type="text" name="name" value="<?php echo old("name"); ?>">
    </li>
    <li>
        <label for="email">Input your email: </label>
        <input type="text" name="email" value="<?php echo old("email"); ?>">
    </li>
    <li>
        <input type="submit" value="Sign Up!">
    </li>
</ul>
</form>
<?php
    if (isset($status)){
        echo "<p class=$cls> $status </p>";
    }
?>
</body>
</html>