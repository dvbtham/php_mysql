<?php
	include "BankAccount.php";
	$acc=new BankAccount("0001");
	echo $acc->Display();
	$acc->deposit(10000);
	$acc->withDraw(10000);
	echo "<br/>" .$acc->getBalance();
?>