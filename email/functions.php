<?php

//adding name and email to the file
define('List_Address' , 'email_list.php');

function add_registered_email($name,$email){

//put the input on mail list file
$output = htmlspecialchars($name) .",". htmlspecialchars($email) ."\n";
file_put_contents("email_list.php", $output, FILE_APPEND);

}

    //get the registered email list
    function get_registered_email($path = List_Address){
        $mail_array = file($path);
        if (count($mail_array)){
        return array_map(function($item){
           $registered_user = explode(',', $item);
           return $registered_user;
        },$mail_array);
}
        return false;
    }

    //checking email validation.
    function validate_email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    //putting previous input after the fail in submission.
function old($key){
    if (!empty($_REQUEST["$key"])){
        return htmlspecialchars($_REQUEST["$key"]);
    }
    return '';
}
    ?>