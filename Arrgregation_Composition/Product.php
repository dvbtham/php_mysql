<?php 

	class Product
	{
		private $id;
		private $name;
		private $description;
		private $model;
		private $price;
		private $inStock;

		function __construct($_id,$_name,$_description,$_model,$_price,$_inStock)
		{
				$this->id= $_id;
				$this->name= $_name;
				$this->description= $_description;
				$this->model= $_model;
				$this->price= $_price;
				$this->inStock= $_inStock;
		}
		public function getProductInStock(){
			return $this->inStock;
		}
		public function setProductInStock($num){
			$this->inStock -= $num;
		}

		function Display(){
			echo "<br>ID: ".$this->id;
			echo "<br>Price: ".$this->name;
			echo "<br>Description: ".$this->description;
			echo "<br>Model: ".$this->model;
			echo "<br>Price: ".$this->price;
			echo "<br>Product in stock: ".$this->inStock;
		}
	}

 ?>