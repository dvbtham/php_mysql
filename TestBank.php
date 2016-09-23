<?php 

	include 'MyAccount.php';

	$svAcc = new SavingAccount("TH001",50000,0.07);
	$svAcc->GuiTien(100000000);
	$svAcc->TruyVanTaiKhoan();

	$ckAcc = new CheckingAccount("TH001",100000,1000);
	$svAcc->GuiTien(100000000);
	$ckAcc->Display();


 ?>