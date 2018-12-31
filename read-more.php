<?php include_once 'header.php';
    
    $postid = $_GET['postid'];
    $query = "SELECT * FROM post WHERE id = $postid";
    $statment = $pdo->query($query);
    while($row =$statment->fetch(PDO::FETCH_ASSOC)):
        ?>  
    <div class="container-fluid">
        <div class="card mb-3" style="width:100%">
            <img src="<?php echo $row['src']; ?>" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['title'];?></h5>
              <p class="card-text"><?php echo $row['content']; ?></p>
            </div>
        </div>
    </div>        
            
<?php endwhile; include_once 'footer.php'; ?>  

