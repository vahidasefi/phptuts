<?php
    require "functions.php";

    //check the request
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);


    //status and alert
    if (empty($name) || empty($email) || !validate_email($email)){
        $status = "Please input correct Name and Email.";
        $cls = "error";
    }
    else {
        add_registered_email($name,$email);
        $status = "You've signed up successfully.";
        $cls = "success";
    }
}
    require "index.tmpl.php";
?>