<?php 

	include 'BankAccount.php';

	/**
	* 
	*/
	class SavingAccount extends BankAccount
	{
		private $laisuat;
		function __construct($_stk,$amount,$lai)
		{
			parent::__construct($_stk,$amount);
			$this->laisuat = $lai;
		}

		public function TinhLai(){
			//Tinh lai = (so tien trong tai khoan * lai suat)/100
			//Tinh xong nap tien vao tai khoan
			return (parent::SoDu() * $this->laisuat)/12;
		}
		public function GuiTien($soLuong){
			//$soLuong la so tien gui vao ngan hang
			$tong_tien = $soLuong + $this->TinhLai();
			return parent::deposit($soLuong);
		}

		public function TruyVanTaiKhoan(){
			echo "<br>Số dư trước lãi: ".parent::SoDu().
			"<br> Tiền lãi: ".$this->laisuat.
			"<br> Số dư sau lãi: ".$this->TinhLai();
		}
	}

	class CheckingAccount extends BankAccount
	{
		private $_fee;
		function __construct($SoTK,$amount,$fee)
		{
			parent::__construct($SoTK,$amount);
			$this->_fee= $fee;
		}
		
		function deductFee(){
			if(parent::withDraw($this->_fee))
			{
				echo "<br>Số dư còn lại: ".parent::SoDu();
			}
		}

		function Display(){
			parent::Display();
			$message = "<br>Phí hàng tháng: ".$this->_fee."<br>";
			$this->deductFee();
		}
	}

 ?>