<?php
class BankAccount{
	protected $accountNumber;
	protected $totalBlance;
	
	public function __construct($acc,$amount) {
		$this->accountNumber=$acc;
		$this->totalBlance=$amount;
	}
	public function getBalance(){
		return 	"Số dư: ".$this->totalBlance;
	}
	public function SoDu(){
		return $this->totalBlance;
	}
	//gui tien
	public function deposit($giatri){
		echo "<br/>Bạn đã nạp: " .$giatri;
		$this->totalBlance += $giatri;
		echo "<br>Số dư tk lúc này: " .$this->SoDu();
	}
	//rut tien
	public function withDraw($giatri)
	{
		if ( $this->SoDu() - $giatri >= 50000){
			 $this->totalBlance -= $giatri;
			 return true;
		}
		else 
			{
				echo "<br/>Số dư không đủ!";
				return false;
			}
	}
	function Display(){
		echo "<br>Số tài khoản: " .$this->accountNumber.
		" - Tổng số dư: ".$this->SoDu();

	}
}
?>
