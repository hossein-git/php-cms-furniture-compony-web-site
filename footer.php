</div><!--allweb-->
<div class="footer">
    
        <?php   
        $sql = "SELECT * FROM footer ";
        $statment = $pdo->query($sql);
        while ($row = $statment->fetch(PDO::FETCH_ASSOC)):
        ?>
        <ul>
            <a class="btn btn-lg btn-light" href="<?php echo $row['link'] ?>"><?php echo $row['title'] ?></a>      
        </ul>
        <?php endwhile; ?>
    
    
    
    <!--div class="social">
        <ul>
            <a href="#" class="twitte"><i class="fab fa-instagram"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="google"><i class="fab fa-whatsapp-square"></i></a>
            <a href="#" class="wha"><i class="fab fa-youtube"></i></a>

        </ul>
    </div-->
    <div class="footer-copyright">
    <p>© 2018 created by hossein haghparast </p>
    </div>
</div>
       
    </body>
</html>
