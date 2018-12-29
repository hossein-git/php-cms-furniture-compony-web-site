
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

        <div class="content-box">
            <div class="content-head">
                <p><?php echo  $row['title'];?></p> 
            </div><!--content-head-->
            <div class="content-body">
                <img src="<?php echo $row['src']; ?>">
                <div class="content-txt" style="font-size: 18px">
                    <P><?php echo $row['content']; ?></p>
                
                </div>
            </div><!--content-body-->
        </div><!--content-box-->
        
        <?php endwhile; ?>