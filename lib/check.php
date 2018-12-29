<?php
include_once 'function.php';
include_once 'db.php';

                /***admin login***/

if (isset($_POST['login'])){
    if (empty(secure_input($_POST['username'])) or empty(secure_input($_POST['password']))){
        header("location:".home_url."admin/login.php?empty=0101");
        die();
    } else {
        $user = secure_input($_POST['username']);
        $sql = "SELECT * FROM admin WHERE username = '$user' ";
        $state = $pdo->query($sql);
        $row_i =$state->fetch(PDO::FETCH_ASSOC);
        $admin_id = $row_i['id'];
        $username = $row_i['username'];
        $password = $row_i['password'];
        if (secure_input($_POST['username']) == $username and secure_input($_POST['password'])== $password){

            session_start();
            $_SESSION['username'] = sha1("$password");
            $_SESSION['admin_id'] = $admin_id;
            header("location:".home_url."admin/panel.php?");
            die();
        } else {
            header("location:".home_url."admin/login.php?error=2020");       
        } 
    }    
}

                /***send post ***/

if (isset($_POST['send-post'])){
    if (
            empty(secure_input($_POST['post-title'])) ||
            empty(secure_input($_POST['post-image-addr'])) ||
            empty(secure_input($_POST['content'])) 
           ){

        header('location:http://localhost/mobl/admin/send-post.php?empty=1010');
        die();
    } else {
        $title = secure_input($_POST['post-title']);
        $image_addr = secure_input($_POST['post-image-addr']);
        $content = secure_input($_POST['content']);
        $sql = "
                INSERT INTO `post` (`id`, `title`, `src`, `content`) 
                VALUES (NULL, '$title', '$image_addr', '$content')";
        
        if ($pdo->exec($sql) == TRUE) {
            
            header('location:'.home_url.'admin/send-post.php?success=0000');
            die();
        } else {
            header('location:'.home_url.'admin/send-post.php?postfaild=0000');
            
        }
    }
}
    

                /*** edit page in manage-post.php ***/
    
if (isset($_POST['edit-post'])){
    if (
            empty(secure_input($_POST['edit-title'])) ||
            empty(secure_input($_POST['edit-image-addr'])) ||
            empty(secure_input($_POST['edit-content'])) 
           ){
        
        header('location:'.home_url.'admin/post-manage.php?empty=1010');
        die();
    } else {
        $title = secure_input($_POST['edit-title']);
        $image_addr = secure_input($_POST['edit-image-addr']);
        $content = secure_input($_POST['edit-content']);
        $edit_id = $_POST['edit-id'];
        $sql = "
            UPDATE post
            SET title = '$title', src = '$image_addr', content = '$content'
            WHERE id = '$edit_id';
        ";
        global $pdo;
        if ($statment = $pdo->query($sql)) {
            echo 'sucsses';
            header('location:'.home_url.'admin/post-manage.php?editok=0000');
            die();
        } else {
            header('location:'.home_url.'admin/post-manage.php?postfaild=0000');
            
        }
    }
}

                /**top menu **/

if(isset($_POST['header'])){
    if(
            empty(secure_input($_POST['head-title'])) or
            empty(secure_input($_POST['head-link']))
            ){
                header ('location:'.home_url.'admin/setting.php?headempty=1010');
                exit();
    }else {
        $title = secure_input($_POST['head-title']);
        $link = secure_input($_POST['head-link']);
        $sql = "
            INSERT INTO `menu` ( `title`, `link`) 
                VALUES ('$title', '$link')
                ";
        
        if ($pdo->exec($sql) == TRUE){
            header ('location:'.home_url.'admin/setting.php?head=1111');
            exit();
  
        } else {
            header ('location:'.home_url.'admin/setting.php?headerror=1111');
            exit();
            
        }
    }
    
}    
    
                /***slider***/

if (isset($_POST['slider'])){
    if(
            empty(secure_input($_POST['slider-image-address'])) or
            empty(secure_input($_POST['slider-title']))
            ){
        header ('location:'.home_url.'admin/setting.php?slidempty=1010');
        die();
    }
    $link = secure_input($_POST['slider-image-address']);
    $title = secure_input($_POST['slider-title']);
    $sql = "
        INSERT INTO `slider` ( `title`, `src`) 
                VALUES ('$title', '$link')
                ";
    if ($pdo->exec($sql) == TRUE){
        header ('location:'.home_url.'admin/setting.php?slide=1111');
            exit();
        
    } else {
        header ('location:'.home_url.'admin/setting.php?slideerror=1111');
            exit();
        
    }
}

                /*spcial posts**/

if (isset($_POST['special'])){
    if(
            empty(secure_input($_POST['sp-title'])) or
            empty(secure_input($_POST['sp-image'])) or
            empty(secure_input($_POST['sp-content']))
            ){
        header ('location:'.home_url.'admin/special-post.php?empty=1010');
        die();
    }
    if (strlen(secure_input($_POST['sp-content'])) > 130 ){
        header ('location:'.home_url.'admin/special-post.php?maxsize=1010');
        die();
    }
    $title= secure_input($_POST['sp-title']);
    $src = secure_input($_POST['sp-image']) ;
    $content = secure_input($_POST['sp-content']);
    $sql = "
                INSERT INTO `special_post` ( `title`, `src`, `content`) 
                VALUES ('$title', '$src', '$content')
                ";
    if($pdo->exec($sql) == TRUE){
     header ('location:'.home_url.'admin/special-post.php?success=1111');
            exit();
        
    } else {
        header ('location:'.home_url.'admin/special-post.php?error=1111');
            exit();   
    }

}

                /***foter***/

if (isset($_POST['footer'])){
    if (
        empty(secure_input($_POST['footer-title'])) or
        empty(secure_input($_POST['footer-link']))    
            ){
                header('location'.home_url.'admin/setting.php?footerempty=1');
                die();
    }
    $title = secure_input($_POST['footer-title']);
    $link = secure_input($_POST['footer-link']);
    $sql = "
            INSERT INTO `footer` ( `title`, `link`) 
                VALUES ('$title', '$link')
                ";
    if($pdo->exec($sql) == TRUE){
        header ('location:'.home_url.'admin/setting.php?footer=1111');
            exit();
        
    }else{
        header ('location:'.home_url.'admin/setting.php?footererror=1111');
            exit();
    }
    
    
    
}

                /**** special post manage***/

if (isset($_POST['special_edit'])){
    if (
            empty(secure_input($_POST['sp-e-title'])) ||
            empty(secure_input($_POST['sp-e-image'])) ||
            empty(secure_input($_POST['sp-e-content'])) 
           ){
        
        header('location:'.home_url.'admin/sp-edit.php?empty=1010');
        die();
        
        if (strlen(secure_input($_POST['sp-e-content'])) > 130 ){
        header ('location:'.home_url.'admin/sp-edit.php?maxsize=1010');
        die();
    }
    } else {
        $title = secure_input($_POST['sp-e-title']);
        $image_addr = secure_input($_POST['sp-e-image']);
        $content = secure_input($_POST['sp-e-content']);
        $edit_id = $_POST['sp-edit-id'];
        $sql = "
            UPDATE special_post
            SET title = '$title', src = '$image_addr', content = '$content'
            WHERE id = '$edit_id';
        ";
        global $pdo;
        if ($statment = $pdo->query($sql)) {
            
            header('location:'.home_url.'admin/sp-manage.php?editok=0000');
            die();
        } else {
            header('location:'.home_url.'admin/sp-edit.php?postfaild=0000');
            
        }
    }
}

                /* delete page - from post-manage */
if (isset($_GET['postdelid'])){
        $post_id = $_GET['postdelid'];
        $del_sql = "DELETE FROM post WHERE id = $post_id ";
        if ($statment = $pdo->query($del_sql)){
            header("location:http://localhost/mobl/admin/post-manage.php?delok=1111");
            die();
        }else{
            header("location:http://localhost/mobl/admin/post-manage.php?delfaild=0000");
            die();   
        }   
        
    } 

                /****menu in setting-manage*****/

if (isset($_GET['menudel'])){
        $menu_id = $_GET['menudel'];
        $del_sql = "DELETE FROM menu WHERE id = $menu_id ";
        if ($statment = $pdo->query($del_sql)){
            header("location:".home_url."admin/setting-manage.php?menudelok=1111");
            die();
        }else{
            header("location:".home_url."admin/setting-manage.php?menudelfaild=0000");
            die();   
        }   
        
    } 
    
                /****footer in setting-manage*****/

if (isset($_GET['footerdel'])){
        $footer_id = $_GET['footerdel'];
        $del_sql = "DELETE FROM footer WHERE id = $footer_id ";
        if ($statment = $pdo->query($del_sql)){
            header("location:".home_url."admin/setting-manage.php?footerdelok=1111");
            die();
        }else{
            header("location:".home_url."admin/setting-manage.php?footerdelfaild=0000");
            die();   
        }   
        
    } 
    
                /****slider in setting-manage*****/

if (isset($_GET['sliderdel'])){
        $slider_id = $_GET['sliderdel'];
        $del_sql = "DELETE FROM slider WHERE id = $slider_id ";
        if ($statment = $pdo->query($del_sql)){
            header("location:".home_url."admin/setting-manage.php?sliderdelok=1111");
            die();
        }else{
            header("location:".home_url."admin/setting-manage.php?sliderdelfaild=0000");
            die();   
        }   
        
    } 
    
                /**** edit post delete*****/
if (isset($_GET['sp-edit-del'])){
        $sp_edit_id = $_GET['sp-edit-del'];
        $del_sql = "DELETE FROM special_post WHERE id = $sp_edit_id ";
        if ($statment = $pdo->query($del_sql)){
            header("location:".home_url."admin/sp-manage.php?delok=1111");
            die();
        }else{
            header("location:".home_url."admin/sp-manage.php?delfaild=0000");
            die();   
        }   
        
    } 
    