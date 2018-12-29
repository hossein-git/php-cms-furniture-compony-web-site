<?php require_once "menu.php"; 
	include_once '../lib/db.php';
?>
        <div class="container">
            <h3 style="text-align: center">Edit special post:</h3>
            <hr><br>
            <h4>
        <?php 
           if (isset($_GET['empty'])){
                echo '<P style="color: red;font-size:25px"> All fields are requird</P>';
            }
            if (isset($_GET['editok'])){
                echo '<P style="color: green;font-size:25px"> your post has successfully edited</P>';
            }
            if (isset($_GET['error'])){
                echo '<P style="color: red;font-size:25px"> an error occured during operation</P>';
            }
            if (isset($_GET['maxsize'])){
                echo '<P style="color: red;font-size:25px"> cant write more than 120 charechter in content</p>';
            }
            if (!isset($_GET['id'])){
                    $row['title'] = $row['src'] = $row['content']= '';
		} else {
                    

		$post_id = $_GET['id'];
                var_dump($post_id);
		$query = "SELECT * FROM special_post WHERE id = $post_id ";
		$statment = $pdo->query($query);
		$row = $statment->fetch(PDO::FETCH_ASSOC);
                
                }   
        ?>
        </h4>     
            <form method="post" action="../lib/check.php">
            
            <div class="form-group">
                <label for="formGroupExampleInput">Special post title:</label>
                <input type="text" class="form-control" name="sp-e-title" value="<?php echo $row['title']; ?>" id="formGroupExampleInput" placeholder="title">
             </div>

             <div class="form-group">
                <label for="formGroupExampleInput2">Special post image address:</label>
                <input type="text" name="sp-e-image" class="form-control" value="<?php echo $row['src']; ?>"id="formGroupExampleInput2" placeholder="image address">
             </div>
                <input type="hidden" name="sp-edit-id" value="<?php echo $row['id']; ?>">  
             <div class="form-group">
                <label for="Textarea1">Content:</label>
                <textarea class="form-control" name="sp-e-content" id="Textarea1" rows="10"><?php echo $row['content']; ?></textarea>
             </div>
  
  
            <input type="submit" class="btn btn-primary" name="special_edit" value="edit post">
            <a class="btn btn-lg btn-success" href="upload.php">Upload image</a>
            <br><br> 
        </form> 
        </div><!--container-->
           
  
   



