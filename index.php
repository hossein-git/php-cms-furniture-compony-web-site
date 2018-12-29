<?php 
    include_once 'header.php';
    include_once 'slider.php';
    include_once 'special-post.php';
    
    $query = "SELECT * FROM post ORDER BY id DESC";
    $statment = $pdo->query($query);
    while($row =$statment->fetch(PDO::FETCH_ASSOC)):  
 ?>     
                <div class="content-width-box">
                    <img src="<?php echo $row['src']; ?>">
                    <div class="content-width-box-title">
                        <p><?php echo $row['title'];?> </p>
                    </div><!--content-width-box-title-->
                    
                    <div class="content-width-box-txt">
                        <?php echo post_contant($row['content'],300); ?>
                    <div style="content-width-box-footer">
                        <a class="btn btn-primary" href="read-more.php?postid=<?php echo $row['id']; ?>">read more...</a>
                    </div>    
                    </div><!--content-width-box-txt-->
                    
                    
                </div><!--content-width-box-->
                
            </div><!--content-wrapp-->
    <?php endwhile;
    include_once 'footer.php'; ?>            