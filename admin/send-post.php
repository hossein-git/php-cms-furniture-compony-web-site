<?php require_once "menu.php"; ?>
        <div class="container">
        <h3 style="text-align: center">New post:</h3>
        <hr><br>
        <h4 style="text-align: center;">
        <?php if(isset($_GET['empty'])){
            echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
        } 
        if(isset($_GET['success'])){
            echo '<p style="color: green;font-size:25px"> your page has been successfuly uploaded</p>';
            }
        if(isset($_GET['postfaild'])){
            echo '<p style="color: red;font-size:25px"> there is problem to connect database</p>';
            }    
        ?>
        </h4><br>    
        
        <form method="post" action="../lib/check.php">
            
            <div class="form-group">
                <label for="formGroupExampleInput">Title:</label>
                <input type="text" name="post-title" class="form-control" id="formGroupExampleInput" placeholder="title">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Address of image:</label>
                <input type="text" name="post-image-addr"  class="form-control" id="formGroupExampleInput2" placeholder="image address">
            </div>

            <div class="form-group">
                <label for="Textarea1"></label>
                <textarea class="form-control" name="content" id="Textarea1" rows="10"></textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-info" name="send-post" value="sendpost">
                <a class="btn btn-lg btn-success" href="upload.php">Upload image</a>
                
            </div>
            
        </form><!--sendpost-form-->
        </div>
    </body>
</html>
