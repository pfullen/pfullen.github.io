<?php

//if (php_sapi_name() != 'cli') echo '<pre>'.PHP_EOL;

// change db name and credentials in this file
   session_start();
	require_once('./db_config.php');
   



  $UserName = $_POST['UserName'];
  $Password = $_POST['Password'];
  
	 
	 // We Will prepare SQL Query
    $params = array('UserName'=>$UserName, 'Password'=> $Password);
	 $query = 'SELECT * FROM `users` WHERE `UserName` = :UserName AND `Password` = :Password';
   
     $rows = $cMySQL->execQ($query, $params);
    
    
//just fetch. only gets one row. So no foreach loop needed :)

   $count = count($rows);

   
//echo ('The count is ' .$count);

// User Redirect Conditions will go here
   if ($count==1)	{
	
	$return = 1;
		
} else {
	
	$return="fail";
	
	

	}
	
	echo json_encode($return);	
// Closing MySQL database connection 
    $dbh = null;
?>

  




























