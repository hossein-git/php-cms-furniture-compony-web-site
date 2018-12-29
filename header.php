<!DOCTYPE html>
<?php include_once 'lib/db.php';
      include_once 'lib/function.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="include/style/style.css">
        <link rel="stylesheet" href="include/style/bootstrap.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>

        <!-- slider properties -->
        <script src="include/sliderengine/jquery.js"></script>
        <script src="include/sliderengine/amazingslider.js"></script>
        <link rel="stylesheet" type="text/css" href="include/sliderengine/amazingslider-1.css">
        <script src="include/sliderengine/initslider-1.js"></script>
        <!-- End of slider properties -->

        <title>funiture</title>
    </head>
    <body>
        <div class="allweb">
            <div class="topmenu">
                <ul>

    <?php 
    $sql = "SELECT * FROM menu ";
    $statment = $pdo->query($sql);
    while ($row = $statment->fetch(PDO::FETCH_ASSOC)):
    ?>
                    <li><a class="btn btn-lg btn-light" href="<?php echo $row['link'] ?>" ><?php echo $row['title'] ?></a></li>
    <?php endwhile; ?>     
                </ul> 
                
            </div>
           
            