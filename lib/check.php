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
        $sql = "SELECT * FROM admin WHERE username = :username";
        $state = $pdo->prepare($sql);
        $state->bindparam(':username',$user, PDO::PARAM_STR);
        $state->execute();
        $row_i =$state->fetch();
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

        header('location:'.home_url.'admin/send-post.php?empty=1010');
        die();
    } else {
        $data['title'] = secure_input($_POST['post-title']);
        $data['src'] = secure_input($_POST['post-image-addr']);
        $data['content'] = secure_input($_POST['content']);
       
        if (insert_into_post('post', $data) == TRUE) {
            
            header('location:'.home_url.'admin/send-post.php?success=0000');
            die();
        } else {
            header('location:'.home_url.'admin/send-post.php?postfaild=0000');
            die();
            
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
        $data['title'] = secure_input($_POST['edit-title']);
        $data['src'] = secure_input($_POST['edit-image-addr']);
        $data['content'] = secure_input($_POST['edit-content']);
        $id = $_POST['edit-id'];
        if (update_post('post', $data, $id) == TRUE) {
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
        $data['title'] = secure_input($_POST['head-title']);
        $data['link'] = secure_input($_POST['head-link']);

        if (insert_into_setting('menu', $data) == TRUE){
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
    $data['link'] = secure_input($_POST['slider-image-address']);
    $data['title'] = secure_input($_POST['slider-title']);
    if (insert_into_setting('slider', $data) == TRUE){
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
    $data['title']= secure_input($_POST['sp-title']);
    $data['src'] = secure_input($_POST['sp-image']) ;
    $data['content'] = secure_input($_POST['sp-content']);
    
    if(insert_into_post('special_post', $data) == TRUE){
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
    $data['title']= secure_input($_POST['footer-title']);
    $data['link'] = secure_input($_POST['footer-link']);
    
    if(insert_into_setting('footer', $data) == TRUE){
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
        $data['title'] = secure_input($_POST['sp-e-title']);
        $data['src'] = secure_input($_POST['sp-e-image']);
        $data['content'] = secure_input($_POST['sp-e-content']);
        $id = $_POST['sp-edit-id'];
        $sql = "
            UPDATE special_post
            SET title = '$title', src = '$image_addr', content = '$content'
            WHERE id = '$edit_id';
        ";
        if (update_post('special_post', $data, $id) == TRUE) {
            
            header('location:'.home_url.'admin/sp-manage.php?editok=0000');
            die();
        } else {
            header('location:'.home_url.'admin/sp-edit.php?postfaild=0000');
            
        }
    }
}

                /* delete page - from post-manage */
if (isset($_GET['postdelid'])){
        $id = $_GET['postdelid']; 
        if (delete('post', $id) == TRUE){
            header("location:http://localhost/mobl/admin/post-manage.php?delok=1111");
            die();
        }else{
            header("location:http://localhost/mobl/admin/post-manage.php?delfaild=0000");
            die();   
        }   
    } 

                /****menu in setting-manage*****/

if (isset($_GET['menudel'])){
        $id = $_GET['menudel'];
        $del_sql = "DELETE FROM menu WHERE id = $menu_id ";
        if (delete('menu', $id) == TRUE){
            header("location:".home_url."admin/setting-manage.php?menudelok=1111");
            die();
        }else{
            header("location:".home_url."admin/setting-manage.php?menudelfaild=0000");
            die();   
        }   
        
    } 
    
                /****footer in setting-manage*****/

if (isset($_GET['footerdel'])){
        $id = $_GET['footerdel'];
        if (delete('footer', $id) == TRUE){
            header("location:".home_url."admin/setting-manage.php?footerdelok=1111");
            die();
        }else{
            header("location:".home_url."admin/setting-manage.php?footerdelfaild=0000");
            die();   
        }   
        
    } 
    
                /****slider in setting-manage*****/

if (isset($_GET['sliderdel'])){
        $id = $_GET['sliderdel'];
        if (delete('slider', $id) == TRUE){
            header("location:".home_url."admin/setting-manage.php?sliderdelok=1111");
            die();
        }else{
            header("location:".home_url."admin/setting-manage.php?sliderdelfaild=0000");
            die();   
        }   
        
    } 
    
                /**** edit post delete*****/
if (isset($_GET['sp-edit-del'])){
        $id = $_GET['sp-edit-del'];
        if (delete('special_post', $id)){
            header("location:".home_url."admin/sp-manage.php?delok=1111");
            die();
        }else{
            header("location:".home_url."admin/sp-manage.php?delfaild=0000");
            die();   
        }   
        
    } 
    