	<?php 

	include 'Product.php';
	include 'OrderItem.php';
	include 'Order.php';

	$product = new Product("P0001","iPhone 7","This is new product, model by Apple.","apple",20000000,12);
	$ot = new OrderItem(4,12000000,123,$product);
	$ot2 = new OrderItem(2,15000000,123,$product);
	
	$oder = new Order("OD0001","19/10/2016", $ot);
	$oder->addOrderItem($ot2);
	echo "<br><br>Order test";
	$oder->disPlayOrderItem();
	$oder->disPlayOrder();

 ?>