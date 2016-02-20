<?php 
    require 'functions.php';
    $registered_user = get_registered_email();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Showing mail list</title>
</head>
<body>
<ul>
<?php
if ($registered_user){
    foreach($registered_user as $user){
        list($name,$email) = $user;
            echo ("<li>$name: <a href='mailto:$email'>$email</a>");
    }
}
    else
    echo "Nothing in the list";
?>
</ul>
</body>
</html> 
