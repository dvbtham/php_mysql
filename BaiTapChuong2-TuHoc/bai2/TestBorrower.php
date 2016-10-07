<?php 

	include 'Borrower.php';
	include 'Loan.php';
	include 'Book.php';
	include 'Student.php';

// test 1
	$stu = new Student("CT14A1.11",33526,".Thâm");

	$book= new Book(123,"Thâm David","PHP cơ bản","1/2/2016","20/10/2016");
	$book1= new Book(124,"Thâm David","PHP nâng cao","3/3/2016","20/10/2016");
	$book2= new Book(125,"Thâm David","ASE.NET MVC cơ bản","9/9/2016","20/10/2016");
	$book3= new Book(126,"Thâm David","ASE.NET MVC pro","5/7/2016","20/10/2016");

	$stu->loanBook($book);
	$stu->loanBook($book1);
	$stu->loanBook($book2);
	$stu->loanBook($book3);

	$loan = new Loan();
	$stu->addLoan($loan);

	$stu->Display();

// test 2
	$book0= new Book(123,"Thâm David","PHP cơ bản","1/2/2016","20/10/2016");
	$book10= new Book(124,"Thâm David","PHP nâng cao","3/3/2016","20/10/2016");
	$book20= new Book(125,"Thâm David","ASE.NET MVC cơ bản","9/9/2016","20/10/2016");
	$book30= new Book(126,"Thâm David","ASE.NET MVC pro","5/7/2016","20/10/2016");
	$book31= new Book(126,"Thâm David","ASE.NET MVC pro","5/7/2016","20/10/2016");

	$stu->loanBook($book0);
	$stu->loanBook($book10);
	$stu->loanBook($book20);
	$stu->loanBook($book30);
	$stu->loanBook($book31);

	$stu->addLoan($loan);

	$stu->Display();

 ?>