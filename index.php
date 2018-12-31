<?php 
    include_once 'header.php';
    include_once 'slider.php';
    include_once 'special-post.php';?>
<hr>
<div class="container">
<?php    $query = "SELECT * FROM post ORDER BY id DESC";
    $statment = $pdo->query($query);
    while($row =$statment->fetch(PDO::FETCH_ASSOC)):  ?>     
    <div class="card mb-3" style="width:100%">
        <img src="<?php echo $row['src']; ?>" class="card-img-top" style="height: 20rem">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title'];?></h5>
          <p class="card-text"><?php echo post_contant($row['content'],300); ?></p>
          <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="read-more.php?postid=<?php echo $row['id']; ?>">read more...</a></small></p>
        </div>
    </div><hr>
                
            
    <?php endwhile;?>
</div>
    <?php include_once 'footer.php'; ?>            