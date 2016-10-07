<?php 

	class Book{
		private $itemNumber;
		private $author;
		private $title;
		private $borrowedDate;
		private $returnedDate;

		function Book($_itemNumber,$_author,$_title,$_borrowedDate,$_returnedDate){
			$this->itemNumber = $_itemNumber;
			$this->author = $_author;
			$this->title = $_title;
			$this->borrowedDate = $_borrowedDate;
			$this->returnedDate = $_returnedDate;
		}

		function getItemNumber(){
			return $this->itemNumber;
		}
		function getAuthor(){
			return $this->author;
		}
		function getTitle(){
			return $this->title;
		}
		function getBorrowedDate(){
			return $this->borrowedDate;
		}
		function getReturnedDate(){
			return $this->returnedDate;
		}
		function Display(){
			return "<br>Item number: ".$this->getItemNumber().
			"<br>Author: ".$this->getAuthor().
			"<br>Title: ".$this->getTitle().
			"<br>Borrowed date: ".$this->getBorrowedDate().
			"<br>Returned date: ".$this->getReturnedDate()."<br>";
		}
		
	}

 ?>