<?php
	
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "";
	$dbname = "sportsmanagement";
	$con=mysqli_connect($servername,$mysqlusername,$password,$dbname)
	or die("Couldn't connect db");
	

?>