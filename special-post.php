    <div class="content-werapp">
        <?php 
        $i = 0 ;
        $query = "SELECT * FROM special_post ";
        $statment = $pdo->query($query);
        while($row =$statment->fetch(PDO::FETCH_ASSOC)): 
        $i++;
        if ($i >3){
            break;
        }
        ?>
        <div class=" content-box card " style="width: 15rem;height:20rem; float: right;">
            <div class="" style="">
                <div class="card-header" style="font-size:1.25rem;">
                <p><?php echo  $row['title'];?></p> 
            </div><!--content-head-->
                <img class="card-img" src="<?php echo $row['src']; ?>" >
                <P class="card-text" style="font-size: 1rem"><?php echo $row['content']; ?></p>
            </div><!--content-body-->
        <!--content-box-->
        </div>
        <?php endwhile; ?>
    </div><br><br>