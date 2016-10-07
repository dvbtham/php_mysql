<?php 

	/**
	* 
	*/
	class Loan
	{
		private $numberOfBook;
	
		function setNumberOfBook($num){
			$this->numberOfBook = $num;
		}

		function getNumberOfBook(){
			return $this->numberOfBook;
		}
		function Display(){
			echo "<br>Number(s): ".$this->getNumberOfBook()."<br>";
		}

	}

 ?>