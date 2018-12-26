<?php
include_once 'function.php';


if (isset($_POST['login'])){
    if (empty(secure_input($_POST['username'])) or empty(secure_input($_POST['password']))){
        header("location:http://localhost/mobl/admin/login.php?empty=0101");
        die();
    }
    if (secure_input($_POST['username']) == 'admin' and secure_input($_POST['password'])== 'admin'){
        header("location:http://localhost/mobl/admin/panel.php");
        session_start();
        $_SESSION['username'] = sha1('admin');
        die();
    } else {
        header("location:http://localhost/mobl/admin/login.php?error=2020");       
    }  
}

