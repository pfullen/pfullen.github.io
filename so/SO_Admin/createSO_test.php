<?php
// use a pre tag if we're not on the cli
if (php_sapi_name() != 'cli') echo '<pre>'.PHP_EOL;

// change db name and credentials in this file
require_once('./db_config.php');




if (isset ($_POST['lineItems'])) {
	$lineItems = $_POST['lineItens'];
} else {
	$lineItems = array();
};


//$s_lineItems = json_decode($lineItems, true);

foreach ($lineItems as $row) {
$itemID = $row['itemID'];
$qty = $row['quantity'];
$price = $row['price'];
echo ("<script> console.log('this is a test')</script>");
print_r($itemID." ".$qty." ".$price);
}
?>