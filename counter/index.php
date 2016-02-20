<?php
/**
 * File Name- index.php
 * Project Name- phptuts
 *
 * Written By Vahid.
 * Created On Monday, February 1, 2016
 *
 * Copyright (c) 2016
 */


    //To make or get the file that contains count number of visits

    function set_count($file_name = 'counter.txt'){
        //checking if file exist
        if (file_exists($file_name)){
//            $handler = fopen($file_name , 'r');
//            $count = (int)fread($handler, 20);
//            $count++;
//            //set the new value
//            $handler =fopen($file_name, 'w');
//            fwrite($handler, $count);
//            fclose($handler);

            $count = (int) file_get_contents($file_name) + 1;
            file_put_contents($file_name,$count);

        }
        //if not, create it
        else{
            //here we will create the file
            $handler = fopen($file_name , 'w+');

            //giving the default value 1
            $count = 1;
            fwrite($handler, $count);
            fclose($handler);

        }
         return $count;
    }
$count = set_count();

//including our view
    //include "index.something.php";
?>


