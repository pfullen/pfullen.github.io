<?php

//if (php_sapi_name() != 'cli') echo '<pre>'.PHP_EOL;
//require_once('./db_config.php');

define('DB_SERVER', 'localhost');
define('DB_USER', 'peter');
define('DB_PASSWORD', 'hodie8888');
define('DB_NAME', 'clsmedical');


	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    
	    
	    $jtSorting =    $_GET['jtSorting']; // "salesOrderDate";
	    (int)$jtStartIndex =  $_GET["jtStartIndex"];
	    (int)$jtPageSize =  $_GET["jtPageSize"];
	    
	    $stmt = $conn->prepare('SELECT * FROM `salesorders` ORDER BY :sort DESC LIMIT :limit1, :limit2 ');
	    
	    
	  
	    $stmt->bindValue(':sort', $jtSorting);
	    $stmt->bindValue(':limit1',(int)$jtStartIndex, PDO::PARAM_INT);
	    $stmt->bindValue(':limit2', (int)$jtPageSize, PDO::PARAM_INT);
	    
	    $stmt->execute();
	    $rows =  $stmt->fetchAll(PDO::FETCH_ASSOC);

       // 
       $stmt2 = $conn->prepare('SELECT * FROM `salesorders`');
       $stmt2->execute();
       $row_count = $stmt2->rowCount();
	   
	   
		 $jTableResult = array();
		 $jTableResult['Result']="OK";
		 $jTableResult['TotalRecordCount']= $row_count;
		 $jTableResult['Records']= $rows;	
		 
		 
		 print json_encode($jTableResult);


 
 
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	    }



?>