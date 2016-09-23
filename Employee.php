<?php 

	/**
	* 
	*/
	class Employee 
	{
		private $employeeName;
	    private $employeeId;
	    private $isWorking;

		function __construct($_employeeName,$_employeeId,$_isWorking)
		{
			$this->employeeName = $_employeeName;
			$this->employeeId = $_employeeId;
			$this->isWorking = $_isWorking;
		}

		function getName()
		{
			return $this->employeeName;
		}
		function setName($name)
		{
			$this->employeeName = $name;
		}

		function getEmployeeId()
		{
			return $this->employeeId;
		}
		function setEmployeeId($id)
		{
			$this->employeeId = $id;
		}

		function isWorking()
		{
			return $this->isWorking;
		}

		function setIsWorking($working)
		{
			$this->employeeId = $working;
		}

		function displayAll(){
			echo "<br>Id: ".$this->getEmployeeId()."<br>Name: ".$this->getName().
			"<br>Status: ".$this->isWorking();
		}
	}


 ?>