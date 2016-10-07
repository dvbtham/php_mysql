<?php 

		class Librarian
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
				$this->isRegistered();
			}
			function registerBooks($_book){
				$this->book[] = $_book;
			}
			
			function isRegistered(){
				foreach ($this->loan as $loan) {
					$loan->setNumberOfBook(count($this->book));
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
		
			function Display(){
				echo "<br>ID: ".$this->getID();
				echo "<br>Name: ".$this->getName();
				$this->showLoan();
				$this->showBook();
			}
		}

 ?>