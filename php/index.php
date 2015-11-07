<?php
	require 'Product.class.php';
	require 'Book.class.php';
	require 'Disc.class.php';

	$potter = new Book(1, 'Harry Potter', 'Novel', 199, 'Pirang', 20142015);
	$potter->toString();

	echo "<br><br><br>";

	Product::$company = "Setec";

	$bazoo = new Disc(2, 'Mama Joy Kan', 'Rock', 20, 'Bazoo', 2016);
	$bazoo->toString();
?>