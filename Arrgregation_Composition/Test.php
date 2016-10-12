<?php 

	include 'Product.php';
	include 'OrderItem.php';

	$product = new Product("P0001","iPhone 7","This is new product, model by Apple.","apple","20.000.000",12);
	$product->Display();
	$ot = new OrderItem(123,"21.000.000",123,$product);
	

 ?>