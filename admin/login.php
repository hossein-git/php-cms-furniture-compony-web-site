<?php
    session_start();
    session_unset();
    session_destroy();
    include_once '../lib/db.php';
    include_once '../lib/tabels.php';
?>

<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="../include/style/bootstrap.css">
        <style>
            #login{
                float: right;
                width: 60%;
                height: auto;
                margin: 10% 20%;
                border: 1px solid #005cbf;
                padding: 0 5%;
                background: #99d4ff;     
            }              
        </style>
    </head>
    <body>
        <div class="" id="login">
            <h3 style="text-align: center">Admin login:</h3>
            <hr><br>
            <h4 style="text-align: center;">
            <!-- to add error massages by using get method -->
        <?php if(isset($_GET['empty'])){
            echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
        } 
        if(isset($_GET['error'])){
            echo '<p style="color: red;font-size:25px"> userame or password is incorrect</p>';
        } 
        ?>
            </h4>    
            
                <form action="../lib/check.php" method="POST"> 
                    
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username:</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="username">
                    </div>
                </div>
                    
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
                </div><br> <br>
                <div class="form-group">    
                    <input type="submit" class="btn btn-primary" name="login" value="login">
                    <a class="btn btn-success" href="../index.php">back to home</a>
                </div>
                </form>  
            
        </div><!--login-container-->

    </body>
</html>



