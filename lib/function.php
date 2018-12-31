<?php
include_once 'db.php';
function secure_input($data){
    return strip_tags(htmlspecialchars(trim(stripcslashes($data))));  
}

function post_contant($text , $num){
    $test = substr($text, 0,$num);
    $test = substr($test,0, strrpos($test," "));
    $test .= "...";
    return $test;
}

define('home_url', 'http://localhost/mobl/');

function selsect_table ($table , $id =NULL ){
    if (!$table){
        return;
    }
    global $pdo;
    if ($id == NULL){
        
    $sql = "SELECT * FROM $table";
    $statment = $pdo->query($sql);
    $row = $statment->fetch(PDO::FETCH_ASSOC);
    return $row;
    } else {
        $sql = "SELECT * FROM $table WHERE id = :id";  
        $stm = $pdo->prepare($sql);
        $stm->bindparam(':id',$id, PDO::PARAM_STR);
        $stm->execute();
        $data = $stm->fetchall();
        return $data;
    }
}

            /*to insert into tables post and special post **/
function insert_into_post ($table ,$data){
    if(!$data || !$table){
        return FALSE;
    }
    $title = $data['title'];
    $src = $data['src'];
    $content = $data['content'];
    
    $sql = "
        INSERT INTO `$table` ( `title`, `src`, `content`) 
        VALUES (:title, :src, :content)";
    global $pdo;
    $statment = $pdo->prepare($sql);
    
    $statment->bindparam(':title',$title, PDO::PARAM_STR);
    $statment->bindparam(':src',$src, PDO::PARAM_STR);
    $statment->bindparam(':content',$content, PDO::PARAM_STR);
    
    $statment->execute();
    return TRUE;
    
}

            /* to insert into tables slider , footer and menu **/
function insert_into_setting ($table ,$data){
    if(!$data || !$table){
        return FALSE;
    }
    $title = $data['title'];
    $link = $data['link'];
    $sql = "
        INSERT INTO `$table` ( `title`, `link`) 
        VALUES (:title, :link)";
    global $pdo;
    $statment = $pdo->prepare($sql);
    $statment->bindparam(':title',$title, PDO::PARAM_STR);
    $statment->bindparam(':link',$link, PDO::PARAM_STR);
    $statment->execute();
    return TRUE; 
}

function update_post ($table ,$data,$id){
    if(!$data || !$table || !$id){
        return FALSE;
    }
    $title = $data['title'];
    $src = $data['src'];
    $content = $data['content'];
    $sql = "
            UPDATE $table
            SET title = :title, src = :src , content = :content
            WHERE id = '$id';
        ";
    global $pdo;
    $statment = $pdo->prepare($sql);
    $statment->bindparam(':title',$title, PDO::PARAM_STR);
    $statment->bindparam(':src',$src, PDO::PARAM_STR);
    $statment->bindparam(':content',$content, PDO::PARAM_STR);
    $statment->execute(); 
    return TRUE; 
}

function delete ($table,$id){
    if(!$table || !$id){
        return FALSE;
    }
    global $pdo;
    $sql =" DELETE FROM $table WHERE id = '$id'";
    $statment = $pdo->query($sql);
        return TRUE;
   
}


/**add a redirect function
function redirect_to($url){
    header('location:'.home_url.$url.DIRECTORY_SEPARATOR);
}
 * 
 */


/*
function add_msg($msg){
    if (!$msg){
        return;
    }
    global $message;
    $message = $msg;
}

function show_message(){
    global $message;
    if (empty($message)){
        return;
    }
    echo 
    '<center><font style="color: red;font-size:25px">'.$message.'</center>';  
}
 * 
 */

