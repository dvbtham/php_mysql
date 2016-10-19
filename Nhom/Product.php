<?php 

	class Product
	{
		private $ProductId;
		private $ProductPrice;
		private $ProductType;
		function __construct($id,$price,$type)
		{
			$this->ProductId = $id;
			$this->ProductPrice = $price;
			$this->ProductType = $type;
		}

		function SelectProduct($id)
		{
				
		}

	}

 ?>