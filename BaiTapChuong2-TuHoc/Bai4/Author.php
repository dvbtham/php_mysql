<?php 

	/**
	* 
	*/
	class Author
	{
		private $name;
		private $email;
		private $gender;
		function __construct($_name,$_email,$_gender)
		{
			$this->name = $_name;
			$this->email = $_email;
			$this->gender = $_gender;
		}
		function Display()
		{
			echo "<br>Name: ".$this->name;
			echo "<br>Email: ".$this->email;
			echo "<br>Gender: ".$this->gender;
			echo "<br>-------------------------------";
		}
	}

 ?>