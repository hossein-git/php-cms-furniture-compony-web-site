<!DOCTYPE html>
<?php
    session_start();
    include_once '../lib/function.php';
    include_once '../lib/db.php';
    $sql = "SELECT * FROM admin";
            $state = $pdo->query($sql);
            $row_i =$state->fetch(PDO::FETCH_ASSOC);
            $username = $row_i['username'];
    if (!$_SESSION['username'] == sha1("$username")){
    header("location:http://localhost/mobl/index.php");
    die(); 
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../include/style/bootstrap.css">
                <title>Post mange</title>
    </head>
    
    <body style="background-color: transparent;">
        
        <ul class="nav nav-pills" style="width: 100%;font-size: 25px;">
            <li class="nav-item">
                <a class="nav-link active" href="panel.php">Panel</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Special post</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="special-post.php">New</a>
                  <a class="dropdown-item" href="sp-manage.php">Manage</a>
                
              </div>
            </li><!--dropdown-->
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Posts</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="send-post.php">New</a>
                  <a class="dropdown-item" href="post-manage.php">Manage</a>
                
              </div>
            </li><!--dropdown-->
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  settings</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="setting.php">new</a>
                  <a class="dropdown-item" href="setting-manage.php">manage</a> 
              </div>
            </li><!--dropdown-->
            
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Footer</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="special-post.php">new</a>
                <a class="dropdown-item" href="#">manage</a> 
              </div>
            </li--><!--dropdown-->
            
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Slider</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="special-post.php">new</a>
                <a class="dropdown-item" href="#">manage</a> 
              </div>
            </li--><!--dropdown-->
            
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log out</a>
            </li>
            
            
        </ul>
        <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../include/js/bootstrap.bundle.js"></script>
