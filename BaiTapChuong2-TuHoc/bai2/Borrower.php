<?php 

		
		class Borrower
		{
			private $id;
			private $name;
			function __construct($_id,$_name)
			{
				$this->id=$_id;
				$this->name=$_name;
				$this->loan = array();
				$this->book = array();
			}

			function setID($_id){
					$this->id=$_id;
			}
			function setName($_name){
					$this->name=$_name;
			}
			function getID(){
					return $this->id;
			}
			function getName(){
					return $this->name;
			}
			function addLoan($loan){
				$this->loan[] = $loan;
				$this->isBorrowed();
			}
			function loanBook($_book){
				$this->book[] = $_book;
				$this->isBorrowed();
			}
			function numberOfBook(){
				return count($this->book);
			}
			function isBorrowed(){
				foreach ($this->loan as $loan) {
					$loan->setNumberOfBook($this->numberOfBook());
				}
			}
			function showBook(){
				foreach ($this->book as $book) {
					echo $book->Display()."<br>";
				}
			}
			function showLoan(){
				foreach ($this->loan as $loan) {
					echo $loan->Display()."<br>";
				}
			}
			function getLoan(){
				foreach ($this->loan as $loan) {
					return $loan;
				}
			}
			function Display(){
				echo "<br>ID: ".$this->getID();
				echo "<br>Name: ".$this->getName();
			}
		}

 ?>