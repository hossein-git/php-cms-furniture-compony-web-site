<?php require_once "menu.php"; 
	
?>
        <div class="container">
        <h3 style="text-align: center">Manage Posts:</h3>
        <hr><br>
        <h4 style="text-align: center;">
        <?php if(isset($_GET['empty'])){
            echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
        } 
        if(isset($_GET['success'])){
            echo '<p style="color: green;font-size:25px"> your page has been successfuly uploaded</cp>';
            }
        if(isset($_GET['postfaild'])){
            echo '<p style="color: red;font-size:25px"> there is problem to connect database</p>';
            }
		
                if (!isset($_GET['postid'])){
                    $row['title'] = $row['src'] = $row['content']= '';
		} else {
                    

		$post_id = $_GET['postid'];
		$query = "SELECT * FROM post WHERE id = $post_id ";
		$statment = $pdo->query($query);
		$row = $statment->fetch(PDO::FETCH_ASSOC);
                }   
        ?>
        </h4><br>    
        
        <form method="post" action="../lib/check.php">
            
            <div class="form-group">
                <label for="formGroupExampleInput">Title:</label>
                <input type="text" name="edit-title" class="form-control" value="<?php echo $row['title']; ?>" id="formGroupExampleInput" placeholder="title">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">SAddress of image:</label>
                <input type="text" name="edit-image-addr"  class="form-control" id="formGroupExampleInput2" value="<?php echo $row['src']; ?>" placeholder="image address">
            </div>

            <div class="form-group">
                <label for="Textarea1">Content:</label>
                <textarea class="form-control" name="edit-content" id="Textarea1" rows="10"><?php echo $row['content']; ?></textarea>
            </div>
            <input type="hidden" name="edit-id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-info" name="edit-post" value="update post">
                <a class="btn btn-lg btn-success" href="upload.php">Upload image</a>
            </div>
            
        </form><!--sendpost-form-->
        </div>
    </body>
</html>
