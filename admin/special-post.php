<?php require_once "menu.php"; ?>
        <div class="container">
        <h3 style="text-align: center">New special post:</h3>
        <hr><br>
        <h4 class="text-center">
        <?php 
           if (isset($_GET['empty'])){
                echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
            }
            if (isset($_GET['success'])){
                echo '<p style="color: green;font-size:25px"> your post has successfully uplodad</p>';
            }
            if (isset($_GET['error'])){
                echo '<p style="color: red;font-size:25px"> an error occured during operation</p>';
            }
            if (isset($_GET['maxsize'])){
                echo '<p style="color: red;font-size:25px"> cant write more than 120 charechter in content</p>';
            }
        
        ?>
        </h4>     
            <form method="post" action="../lib/check.php">
            
            <div class="form-group">
                <label for="formGroupExampleInput">Special post title:</label>
                <input type="text" class="form-control" name="sp-title" id="formGroupExampleInput" placeholder="title">
             </div>

             <div class="form-group">
                <label for="formGroupExampleInput2">Special post image address:</label>
                <input type="text" name="sp-image" class="form-control" id="formGroupExampleInput2" placeholder="image address">
             </div>

             <div class="form-group">
                <label for="Textarea1">Content:</label>
                <textarea class="form-control" name="sp-content" id="Textarea1" rows="10"></textarea>
             </div>
  
  
            <input type="submit" class="btn btn-primary" name="special" value="send post">
            <a class="btn btn-lg btn-success" href="upload.php">Upload image</a>
            <br><br>
        </form> 
        </div><!--container-->
        
        
