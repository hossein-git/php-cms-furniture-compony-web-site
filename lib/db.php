<?php
/*define database name and its other opions*/

$dsn = 'mysql:dbname=furniture;host=localhost';
$username = 'root';
$password = '';

try {
	$pdo = new PDO( $dsn, $username, $password );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//error handeling
        global $pdo;
        
} catch( PDOException $e ) {
	echo'conection failed <br>' . $e->getMessage() ;
}



   


