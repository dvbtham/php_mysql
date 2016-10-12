<?php 

		class OrderItem
		{
			private $orderItemId;
			private $quantity;
			private $price;
			//quan he ket tap
			private $product;
			function __construct($_quantity,$_price,$_orderItemId,$_product)
			{
					$this->orderItemId = $_orderItemId;
					$this->quantity = $_quantity;
					$this->price = $_price;

					$p_inStock = $_product->getProductInStock();
					if($p_inStock - $_quantity >= 0)
					{
						$this->product = $_product;
						$_product->setProductInStock($_quantity);
						$this->Display();
					}
					else
					{
						echo "<br>You try to buy (".$_quantity.") products.<br>No more product in stock.... please come back later.";
					}
					
			}
			function Display(){
				echo "<br>Order item id: ".$this->orderItemId;
				echo "<br>Quantity: ".$this->quantity;
				echo "<br>Price: ".$this->price;
				echo "<br>----------------";
				$this->product->Display();
			}
		}

 ?>