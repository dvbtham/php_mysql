<?php 

	include 'Product.php';

	$p= new Product("IP6",13000000,"Điện thoại");
	$p2= new Product("ASUS",12000000,"Laptop");
	$p3= new Product("EXC",45000000,"Xe máy");

	$p->AddProduct($p2);
	$p->AddProduct($p3);
	$p->SelectProduct("IP6");

 ?>