<?php 

	include 'Book.php';
	include 'Author.php';

	$aut1= new Author("Tham David","dvbtham@gmail.com","Male");
	$aut2= new Author("John Doe","jonhdoe@gmail.com","Male");
	$aut3= new Author("Lukas Shaw","shaw@gmail.com","Male");
	$aut4= new Author("Gareth Bale","bale@gmail.com","Male");
	$aut5= new Author("Taylor Swift","tlswift@gmail.com","Female");

	$book = new Book("PHP core",50000,12);
	$book->addAuthor($aut1);
	$book->addAuthor($aut2);
	$book->addAuthor($aut1);
	$book->addAuthor($aut2);
	$book->addAuthor($aut1);
	$book->Display();
	
	$book->addAuthor($aut1);
	$book->addAuthor($aut1);
	$book->Display();

 ?>