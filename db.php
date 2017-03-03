<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=main', "root", "");
    
	for($i = 1; $i < 10000; $i++) {
		
		//$dbh->query('INSERT INTO `orders`(`client_id`, `product_id`, `amount`, `created`, `ip`, `client_phone`) VALUES ("'.$i.'","'.$i.'","'.$i.'","'.date("Y-m-d H:i:s").'","'.$i.'","'.$i.'")');

	}
	
  
    
	$dbh = null;

	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>