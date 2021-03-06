<?php
// use a pre tag if we're not on the cli
//if (php_sapi_name() != 'cli') echo '<pre>'.PHP_EOL;

// change db name and credentials in this file
//require_once('./db_config.php');

define('DB_SERVER', 'localhost');
define('DB_USER', 'peter');
define('DB_PASSWORD', 'hodie8888');
define('DB_NAME', 'clsmedical');




if (isset($_GET['term'])){
	$return_arr= array() ;
 
	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('SELECT name FROM customers WHERE name LIKE :term');
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    
	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['name'];
	    }
 
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
 
 
    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}
	
?>