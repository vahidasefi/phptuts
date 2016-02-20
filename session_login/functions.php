<?php

//validate user credentials

function check_user_creds($username, $password)
{
    return ($username === USERNAME && $password === PASSWORD);
}
//check session and log in
function check_the_session(){
return(isset($_SESSION['username']));
}

function set_the_session($username){
    header("Location: admin.php");
    $_SESSION['username'] = $username;
    }