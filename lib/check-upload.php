<?php include_once '../admin/menu.php';?>

<div class="upload-box">

<?php
if(empty($_FILES['file'])){
    echo '<center><font style="color: green;font-size:25px"> THER IS NO FILE</center><BR>'
    . '<a href="../admin/upload.php">back</>';

} else {
    $filename = $_FILES['file']['name'];
    $filesize = $_FILES['file']['size'];
    $filetyrpe = $_FILES['file']['type'];
    $filetmp = $_FILES['file']['tmp_name'];
    if (is_uploaded_file($filetmp)){
        //move uploaded file to thump folder
        if( move_uploaded_file($filetmp, '../thump/'.$filename)){
            
            echo '<center><font style="color: red;font-size:25px"> your page has been successfuly uploaded</font></center><br>';
            echo "your file name:$filename<br>";
            echo "your file size : $filesize<br>";
            echo "your file type :$filetyrpe";
            
        } else {
            
            echo '<center><font style="color: red;font-size:25px">problem to upload </center>'; 
        } 
    } else {
        
       echo '<center><font style="color: red;font-size:25px">problem to upload </center>'; 
    }
    
    
    
    
}







?>
</div>