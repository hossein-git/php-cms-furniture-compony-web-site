<?php include_once 'header.php';
    
    $postid = $_GET['postid'];
    $query = "SELECT * FROM post WHERE id = $postid";
    $statment = $pdo->query($query);
    while($row =$statment->fetch(PDO::FETCH_ASSOC)):
?>
    <body>
        <div class="allweb">
            
            <div class="allweb">
                <div class="rd-content">
                    <img src="<?php echo $row['src']; ?>">
                    <div class="rd-content-title">
                        <p><?php echo $row['title']; ?></p>
                    </div><!-- rd-content-title-->
                    <div class="rd-content-txt">
                        <?php echo $row['content']; ?>
                    </div><!--rd-content-txt-->
                </div><!--rd-content-->
                
            </div><!--allweb-->
            
            
<?php endwhile; include_once 'footer.php'; ?>  

