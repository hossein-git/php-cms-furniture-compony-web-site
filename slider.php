<div class="slider">
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
        <?php 
        $query = "SELECT * FROM slider ";
        $statment = $pdo->query($query);
        while($row =$statment->fetch(PDO::FETCH_ASSOC)): 
                ?>
                <li><img src="<?php echo $row['link'] ?>" alt="<?php echo $row['title'] ?>"  title="<?php echo $row['title'] ?>" />
                </li>
        <?php endwhile; ?>        
            </ul>
        </div>
    </div>
</div>
