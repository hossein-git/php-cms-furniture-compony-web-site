<?php require_once "menu.php"; ?>
        
<div class="container" style="background: #e8f0f6">
        <h3 style="text-align: center">Slider:</h3>
        <hr><br>
        <h4 style="text-align: center"><!--sendpost-title-->
        <?php 
            if (isset($_GET['slidempty'])){
                echo ' <p style="color: red;font-size:25px"> All fields are requird</p>';
            }
            if (isset($_GET['slide'])){
                echo '<p style="color: green;font-size:25px"> your post has successfully uplodad</p>';
            }
            if (isset($_GET['slideerror'])){
                echo 'an error occured during operation';
            }
        
        ?>
        </h4><br>    
        
            <form class="sendpost-form" method="post" action="../lib/check.php">
            
            <div class="form-group">
                <label for="formGroupExampleInput">Image Address:</label>
                <input type="text" name="slider-image-address" class="form-control" id="formGroupExampleInput" placeholder="Image Address">
            </div>
  
            <div class="form-group">
              <label for="formGroupExampleInput2">Title of Image:</label>
              <input type="text" name="slider-title"  class="form-control" id="formGroupExampleInput2" placeholder="image title">
            </div> 
            <div class="form-group">    
                <input type="submit" class="btn btn-lg btn-info" name="slider" value="send post">
                <a href="upload.php" class="btn btn-lg btn-success">Upload image</a>
                
            </div>        
            </form> 
        </div>
<!--set-container-->
        
        <div class="container" style="background: #e8f0f6">
            <h3 style="text-align: center">Upper Menu Settings:</h3>
            <hr><br>
            <h4 style="text-align: center"><!--sendpost-title-->
        <?php 
            if (isset($_GET['headempty'])){
                echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
            }
            if (isset($_GET['head'])){
                echo '<p style="color: green;font-size:25px"> your post has successfully uplodad</p>';
            }
            if (isset($_GET['headerror'])){
                echo '<p style="color: red;font-size:25px"> an error occured during operation</p>';
            }
        ?>
            </h4><br>        
            
                <form class="sendpost-form" method="post" action="../lib/check.php">

                <div class="form-group">
                    <label for="formGroupExampleInput">Title:</label>
                    <input type="text" name="head-title" class="form-control" id="formGroupExampleInput" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Link:</label>
                    <input type="text" name="head-link"  class="form-control" id="formGroupExampleInput2" placeholder="Link">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-info" name="header" value="sendpost">
                    
                </div><br> 
            </form>
        </div> <br> 
            <!--set-container-->
        
        <div class="container" style="background: #e8f0f6" >
            <h3 style="text-align: center">Footer Mneu Setting:</h3>
            <hr><br>
            <h4 style="text-align:center;"><!--sendpost-title-->
            <?php 
            if (isset($_GET['footerempty'])){
                echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
            }
            if (isset($_GET['footer'])){
                echo '<p style="color: green;font-size:25px"> your post has successfully uplodad</p>';
            }
            if (isset($_GET['footererror'])){
                echo '<p style="color: red;font-size:25px"> an error occured during operation</p>';
            }
            ?>
            </h4><br> 
                   
            
            <form method="post" action="../lib/check.php">
                    
                <div class="form-group">
                    <label for="formGroupExampleInput">Title:</label>
                    <input type="text" name="footer-title" class="form-control" id="formGroupExampleInput" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Link:</label>
                    <input type="text" name="footer-link"  class="form-control" id="formGroupExampleInput2" placeholder="Link">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-info" name="footer" value="sendpost">
                </div> 
                    
            </form> 
        </div>
        <!--set-container-->
        
    </body>
</html>
