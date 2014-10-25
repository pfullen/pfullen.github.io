<html>
<?php
$json = '[{"name":"customer","value":"Grady"},{"name":"lineItem:product[]","value":"GOWN"},{"name":"lineItem:qty[]","value":"4"},{"name":"notes","value":""}]';
       
$s_input = array('invoiceID' => 1234, 'date' => '2014-08-07 13:00', 'SalesmanID' => 4, 'invc_total' => 425.00, 'notes' => 'no current notes', 'line_items' => array(
	array('itemID' => 77, 'quantity' => 4, 'price' => 99.00, 'description' => 'Gown'),
	array('itemID' => 61, 'quantity' => 2, 'price' => 7.00, 'description' => 'Belt'),
	array('itemID' => 77, 'quantity' => 1, 'price' => 15.00, 'description' => 'Necklace'),
	));

$s_json = json_encode($s_input);

$arr = json_decode($json);
//print_r($arr);
//echo $s_json.PHP_EOL;
$arr2 = json_decode($s_json, true);
//print_r($arr2); 

//print_r($json=>'customer';) 

//print_r($s_input[5]);

$lineItems = $s_input['line_items'];
 foreach ($lineItems as $row) {


$itemID = $row['itemID'];
$qty = $row['quantity'];
$price = $row['price'];

print_r($itemID." ".$qty." ".$price);
print_r($s_input['itemID'['77']['price']);
echo("<br>");
 
print_r ($arr2); 
 
 }

?>
</html>