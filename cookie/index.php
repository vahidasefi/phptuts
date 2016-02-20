<?php
/**
 * File Name- index.php
 * Project Name- phptuts
 *
 * Written By Vahid.
 * Created On Wednesday, January 27, 2016
 *
 * Copyright (c) 2016
 */

    //define cookie setter here
    setcookie('info[name]','vahid');
    setcookie('info[family]','asefi');
    setcookie('info[job]','programmer');



?>
<!DOCTYPE html>
<html>
<head>
    <title>Test the cookie</title>
<style>
    body{font-size: 25px; }

</style>
</head>
<body>
<p>Hello how are you?</p>

<ul>
    <?php
        if(isset($_COOKIE['info'])){
            foreach ($_COOKIE['info'] as $item => $value) {
                echo "<li>" . htmlspecialchars($item) . " : " .  htmlspecialchars($value) . "</li>";
            }
        }
    ?>
</ul>

</body>
</html>
