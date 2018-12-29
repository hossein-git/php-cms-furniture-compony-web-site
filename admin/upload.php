<?php include_once 'menu.php';
?>

<html>
    <head>
        <title>upload</title>
        <link rel="stylesheet" href="../include/style/bootstrap.css">
    </head>
    <body>
        <div class="container">
        <h3 style="text-align: center">upload:</h3>
        <hr><br>
        </div><!--sendpost-title-->
        <div class="container">
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">image address:</label>
                    <input type="file" name="file" class="form-control" id="formGroupExampleInput">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-info" name="upload" value="upload">
                </div>
            </form>
            <a href=""></a>
        </div>
    </body>
</html>


<div class="container">

<?php
if(empty($_FILES['file'])){
    echo '<p style="color:red;font-size:25px"> Choose a file</p><BR>';

} else {
    $filename = $_FILES['file']['name'];
    $filesize = $_FILES['file']['size'];
    $filetyrpe = $_FILES['file']['type'];
    $filetmp = $_FILES['file']['tmp_name'];
    if (is_uploaded_file($filetmp)){
        //move uploaded file to thump folder
        if( move_uploaded_file($filetmp, '../thump/'.$filename)){
            
            echo '<p style="color: green;font-size:25px"> your page has been successfuly uploaded</p><br>';
            echo "your file name:$filename<br>";
            echo "your file size : $filesize<br>";
            $addr = '<a href="'.home_url."thump/$filename".'">'.home_url."thump/$filename".'</a>';
            echo "your file type :<br>";
            echo "your file addres is :<br>$addr";
            
        } else {
            
            echo '<p style="color: red;font-size:25px">problem to upload </p>'; 
        } 
    } else {
        
       echo '<p style="color: red;font-size:25px">problem to upload </p>'; 
    }
  
}

?>
</div>

