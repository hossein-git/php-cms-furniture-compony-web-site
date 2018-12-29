<?php 
require_once "menu.php"; 
 ?>

    <div class="container">
        <h3 style="text-align: center">Manage Posts:</h3>
        <hr><br>
        <h4 style="text-align: center;">
<?php 
    if(isset($_GET['empty'])){
            echo '<p style="color: red;font-size:25px"> All fields are requird</p>';
        } 
    if(isset($_GET['delok'])){
        echo '<p style="color: green;font-size:25px"> your page has been successfuly deleted</p';
        }
    if(isset($_GET['delfaild']) or isset($_GET['postfaild'])){
        echo '<p style="color: red;font-size:25px"> error ocured during operation</p>';
        }
        if(isset($_GET['editok'])){
        echo '<p style="color: green;font-size:25px"> your page has been successfuly edited</p>';
        }
        

    $query = "SELECT * FROM special_post ";
    $statment = $pdo->query($query);
    
?>        
        </h4> <br> 
        
        <table class="table table-bordered table-hover">
        
            <thead class="table-primary" style="font-size: 20px;text-align: center;">
                <tr>
                  <th scope="col">Page Title</th>
                  <th scope="col">Opration</th>
                </tr>
            </thead>  
        <!-- k-->
        <?php while ($row = $statment->fetch(PDO::FETCH_ASSOC)):?>
        <tr class="table-light"> 
                <td> <a class="btn btn-info btn-lg"><?php echo $row['title']; ?></a>
                </td>
                <td style="text-align:center">
                    <a class="btn btn-lg btn-danger" href="../lib/check.php?sp-edit-del=<?php echo $row['id']; ?>">Delete</a>
                        <a class="btn btn-lg btn-success" href="sp-edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
                </td>   
            </tr>
            
        <?php
            endwhile; ?>
         
    </table>
    </div>
    </body>
</html>
            
