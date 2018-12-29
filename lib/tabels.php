<?php
require_once 'db.php';
//creat tables in our database
$menu = ("
                CREATE TABLE IF NOT EXISTS menu (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        title TEXT NOT NULL,
                        link TEXT NOT NULL
                    )
                ");
$slider = ("
                CREATE TABLE IF NOT EXISTS slider (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        src TEXT NOT NULL,
                        link TEXT NOT NULL
                    )
                ");
$special_post= ("
                CREATE TABLE IF NOT EXISTS special_post (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        title TEXT NOT NULL,
                        src TEXT NOT NULL,
                        content TEXT NOT NULL 
                    )
                ");
$post = ("
                CREATE TABLE IF NOT EXISTS post (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        title TEXT NOT NULL,
                        src TEXT NOT NULL,
                        content TEXT NOT NULL
                    )
                ");

$footer = ("
                CREATE TABLE IF NOT EXISTS footer (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        title TEXT NOT NULL,
                        link TEXT NOT NULL     
                    )
                ");

$admin = $footer = ("
                CREATE TABLE IF NOT EXISTS admin (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        f_name VARCHAR(100) NOT NULL,
                        l_name VARCHAR(100) NOT NULL,
                        age INT(11) NOT NULL,
                        img TEXT NOT NULL,
                        username VARCHAR(100) NOT NULL,
                        password VARCHAR(200) NOT NULL   
                    )
                ");
                /**** creat a user if not exist****/


/** put all queries in one array and add them into database **/
$sql = array($menu,$slider,$special_post,$post,$footer,$admin);

foreach ($sql as $table){
    $pdo->exec($table);
    
}

