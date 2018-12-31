<?php
include_once 'menu.php';
?>
<div class="container">
        <h3 style="text-align: center">Manage upper menu:</h3>
        <hr><br>
        <h4 style="text-align: center;">
<?php 
    if(isset($_GET['menudelok'])){
        echo '<p style="color: green;font-size:25px"> your page has been successfuly deleted</p>';
        }
    if(isset($_GET['menudelfaild']) or isset($_GET['postfaild'])){
        echo '<p style="color: red;font-size:25px"> error ocured during operation</p>';
        }
    $mnu = "SELECT * FROM menu ";
    $statment = $pdo->query($mnu);
?>        
        </h4><br> 
        <table class="table table-bordered table-hover">
        
            <thead class="table-primary" style="font-size: 20px;text-align: center;">
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Link</th>
                  <th scope="col">Opration</th>
                </tr>
            </thead>  
        <!-- k-->
        <?php while ($row_mnu = $statment->fetch(PDO::FETCH_ASSOC)):?>
        <tr class="table-light"> 
                <td> <a class="" ><?php echo $row_mnu['title']; ?></a>
                </td>
                <td> <a href="<?php echo $row_mnu['link']; ?> "class=""><?php echo $row_mnu['link']; ?></a>
                </td>
                <td style="text-align:center">
                    <a class="btn btn-lg btn-danger" href="../lib/check.php?menudel=<?php echo $row_mnu['id']; ?>">Delete</a>
                </td>   
            </tr> 
        <?php
            endwhile; ?>   
    </table>
</div><br>
        
    <div class="container">
        <h3 style="text-align: center">Manage Footer:</h3>
        <hr><br>
        <h4 style="text-align: center;">
<?php 
    if(isset($_GET['footerdelok'])){
        echo '<p style="color: green;font-size:25px"> your page has been successfuly deleted</p>';
        }
    if(isset($_GET['footerdelfaild']) or isset($_GET['postfaild'])){
        echo '<p style="color: red;font-size:25px"> error ocured during operation</p>';
        }
    $footer = "SELECT * FROM footer ";
    $statment_footer = $pdo->query($footer);
?>        
        </h4><br> 
        <table class="table table-bordered table-hover">
            <thead class="table-primary" style="font-size: 20px;text-align: center;">
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Link</th>
                  <th scope="col">Opration</th>
                </tr>
            </thead>  
        <!-- k-->
        <?php while ($row_footer = $statment_footer->fetch(PDO::FETCH_ASSOC)):?>
        <tr class="table-light"> 
                <td> <a class="" ><?php echo $row_footer['title']; ?></a>
                </td>
                <td> <a href="<?php echo $row_footer['link']; ?> "class=""><?php echo $row_footer['link']; ?></a>
                </td>
                <td style="text-align:center">
                    <a class="btn btn-lg btn-danger" href="../lib/check.php?footerdel=<?php echo $row_footer['id']; ?>">Delete</a>
                </td>   
            </tr>   
        <?php
            endwhile; ?>
        </table>
    </div><br>      
    <div class="container">
        <h3 style="text-align: center">Manage Slider:</h3>
        <hr><br>
        <h4 style="text-align: center;">
<?php 
    if(isset($_GET['sliderdelok'])){
        echo '<p style="color: green;font-size:25px"> your page has been successfuly deleted</p>';
        }
    if(isset($_GET['sliderdelfaild']) or isset($_GET['postfaild'])){
        echo '<p style="color: red;font-size:25px"> error ocured during operation</p>';
        }
    $slider = "SELECT * FROM slider ";
    $statment_slider = $pdo->query($slider);
?>        
        </h4><br> 
        
        <table class="table table-bordered table-hover">
        
            <thead class="table-primary" style="font-size: 20px;text-align: center;">
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Image link</th>
                  <th scope="col">Opration</th>
                </tr>
            </thead>  
        <!-- k-->
        <?php while ($row_slider = $statment_slider->fetch(PDO::FETCH_ASSOC)):?>
        <tr class="table-light"> 
                <td> <a class="" ><?php echo $row_slider['title']; ?></a>
                </td>
                <td> <a href="<?php echo $row_slider['link']; ?> "class=""><?php echo $row_slider['link']; ?></a>
                </td>
                <td style="text-align:center">
                    <a class="btn btn-lg btn-danger" href="../lib/check.php?sliderdel=<?php echo $row_slider['id']; ?>">Delete</a>
                </td>   
            </tr>
        <?php
            endwhile; ?>
        </table>
    </div>            
</body>
</html>

