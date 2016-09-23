<?php 	

	include 'Employee.php';

	/**
	* 
	*/
	class StudentEmployee extends Employee
	{
		private $hoursWorked;
	    private $workStudy;
	    private $payRate;
		function __construct($_employeeName,$_employeeId,$_isWorking,$_hoursWorked,$_workStudy,$_payRate)
		{
			parent::__construct($_employeeName,$_employeeId,$_isWorking);
			$this->hoursWorked = $_hoursWorked;
			$this->workStudy = $_workStudy;
			$this->payRate = $_payRate;
		}

		function getPayRate()
		{
			return $this->payRate;
		}
		function setPayRate($_payRate)
		{
			$this->payRate= $_payRate;
		}

		function displayAll(){
			
			parent::displayAll();
			echo "<br>Payrate: ".$this->getPayRate();
		}
	}

 ?>