<?php 

	class Book
	{
		private $name;
		private $price;
		private $numAuthor = 0;
		private $qtyInStock;
		function __construct($_name,$_price,$_qtyInStock)
		{
			$this->name = $_name;
			$this->price = $_price;
			$this->qtyInStock = $_qtyInStock;
			$this->author = array();
		}

		function addAuthor($author)
		{
				if($this->numAuthor >= 0 && $this->numAuthor <= 4){
					$this->author[] = $author;
					$this->numAuthor++;
				}
				else
				{
					echo "<br>Book only creating by 5 authors.";
					$this->numAuthor++;
				}
		}

		function getAuthors(){
				foreach($this->author as $author) 
				{
					$author->Display();
				}
		}
		function Display(){
			if($this->numAuthor == 0)
			{
					echo "Book is invalid, you have to add author.";
			}
			else
			{
				if($this->numAuthor <= 5)
				{	
					echo "<br>Book title: ".$this->name;
					echo "<br>Price: ".$this->price;
					echo "<br>Quantity in stock: ".$this->qtyInStock;
					echo "<br>Authors: ".$this->numAuthor;
					echo "<br>-------------------------------";
					$this->getAuthors();
				}
			}
			
		}
	}

 ?>