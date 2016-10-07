<?php 

	include 'Loan.php';
	include 'Book.php';
	include 'Librarian.php';

	$lib = new Librarian("TT001","Nguyễn Thị Kim");
	$loan = new Loan();

	$book= new Book(123,"Thâm David","PHP cơ bản","1/2/2016","20/10/2016");
	$book1= new Book(124,"Thâm David","PHP nâng cao","3/3/2016","20/10/2016");
	$book2= new Book(125,"Thâm David","ASE.NET MVC cơ bản","9/9/2016","20/10/2016");
	$book3= new Book(126,"Thâm David","ASE.NET MVC pro","5/7/2016","20/10/2016");

	$lib->registerBooks($book);
	$lib->registerBooks($book1);
	$lib->registerBooks($book2);
	$lib->registerBooks($book3);
	$lib->addLoan($loan);
	$lib->Display();

 ?>