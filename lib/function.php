<?php

function secure_input($data){
    return strip_tags(htmlspecialchars(trim(stripcslashes($data))));  
}

function post_contant($text , $num){
    $test = substr($text, 0,$num);
    $test = substr($test,0, strrpos($test," "));
    $test .= "...";
    return $test;
}


define('home_url', 'http://localhost/mobl/');

/**add a redirect function
function redirect_to($url){
    header('location:'.home_url.$url.DIRECTORY_SEPARATOR);
}
 * 
 */


/*
function add_msg($msg){
    if (!$msg){
        return;
    }
    global $message;
    $message = $msg;
}

function show_message(){
    global $message;
    if (empty($message)){
        return;
    }
    echo 
    '<center><font style="color: red;font-size:25px">'.$message.'</center>';  
}
 * 
 */

