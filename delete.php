<?php 
	include('connection.php'); 
	
	$sno = $_GET['sno'];
	$q = "DELETE FROM posts WHERE sno = '$sno' ";
	mysqli_query($conn, $q);
	header('location:dashboard.php');

?>
