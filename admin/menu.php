<!DOCTYPE html>
<?php
    session_start();
    require_once '../config.php';
    if (!$_SESSION['username'] == sha1('admin')){
    header("location:http://localhost/mobl/index.php");
    die(); 
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../include/style/style.css">
        <title>Post mange</title>
    </head>
    <body>
        <div class="admin-menue">
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="special-post.php">Special Posts</a></li>
                <li><a href="post-manage.php">Post Managing</a>
                    <ul>
                        <li><a href="send-post.php">Send a new Post</a></li>
                        <li><a href="post-manage.php">Manage last posts</a></li>      
                    </ul>
                </li>
                
                <li><a href="setting.php">Setting</a></li> 
                <li><a style="color: red" href="login.php">Log out</a></li>
                             
            </ul><!--admin-menue-->

        </div><!--admin-menue-->