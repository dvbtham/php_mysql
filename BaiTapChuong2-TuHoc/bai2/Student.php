<?php 

	class Student extends Borrower
	{
		private $class;
		function __construct($_class,$_id,$_name)
		{
			parent::__construct($_id,$_name);
			$this->class = $_class;
		}

		function loanBook($book){
				parent::loanBook($book); 
		}
		function addLoan($loan){
				parent::addLoan($loan); 
		}

		function Display(){
			parent::Display();
			echo "<br>Class: ".$this->class;
			parent::getLoan()->Display()."<br>";
			parent::showBook();
			
		}
	}

	?>