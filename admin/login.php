<?php
    session_start();
    session_unset();
    session_destroy();
?>

<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="../include/style/style.css">
    </head>
    <body>
        <div class="login-container">
            <p>login panel</p> 
            <hr>
            <!-- to add error massages by using get method -->
        <?php if(isset($_GET['empty'])){
            echo '<center><font style="color: red;font-size:25px"> All fields are requird</center>';
        } 
        if(isset($_GET['error'])){
            echo '<center><font style="color: red;font-size:25px"> userame or password is incorrect</center>';
        } 
        ?>
            
            <div class="login-form">
                <form action="../lib/check.php" method="POST"> 
                <label for="username">User Name:</label>
                <input type="text" name="username" id="username"  placeholder="username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="password"><br>
                <input type="submit" name="login">
                <a href="index.php">back to home</a>
                </form>  
            </div>
        </div><!--login-container-->

    </body>
</html>



