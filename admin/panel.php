<?php 
    require_once "menu.php"; ?>   
        <div class="container"> 
            <h3 style="text-align: center">
                Welcome Admin
            </h3><hr>
            <div class="content-box text-center" style="float: left;width: 19rem;">
                <h4 class="text-center">last posts</h4>
                <hr>   
            <div class="content-box">
                <ul>
            <?php
            $query = "SELECT * FROM post ORDER BY id DESC";
            $statment = $pdo->query($query);
            while($row =$statment->fetch(PDO::FETCH_ASSOC)):  
            ?>         
                <a href="../read-more.php?postid=<?php echo $row['id']; ?>" class="btn btn-light btn-lg btn-block">
                    <p style=""><?php echo $row['title']; ?></p>
                </a><!--admin-box-block-->
                    
            <?php endwhile; ?> 
                    
                </ul> 
            </div><!--admin-box-txt-->
        </div><!--admin-box-->
        
        <div class="content-txt" style="float: right;">
            <?php
            $admin_id = $_SESSION['admin_id']; 
            $sql = "SELECT * FROM admin WHERE id = $admin_id";
            $state = $pdo->query($sql);
            $row_i =$state->fetch(PDO::FETCH_ASSOC);
            ?>  
            <div class="card" style="width: 19rem;">
                <img src="<?php echo $row_i['img'];?>" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title text-center">Admin information:</h5>
                  <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item h6">Full Name:<span style="color: brown"><?php echo $row_i['f_name'];?></span></li>
                  <li class="list-group-item h6">Age:<span style="color: brown"> <?php echo $row_i['age'];?></span></li>
                  <li class="list-group-item h6">Username:<span style="color: brown"> <?php echo $row_i['username'];?></span></li>
                      <li class="list-group-item h6">Password: <span style="color: brown"><?php echo $row_i['password'];?></span></li>
                </ul>
                <!--div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div-->
            </div>
            
        </div><!--admin-inf-->
        </div><!--container-->
</body>
</html>


