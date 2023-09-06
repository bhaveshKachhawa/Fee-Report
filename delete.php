<?php
	error_reporting(1);
  	$value=$_GET['del'];
  	require 'connection.php';
  	$query="DELETE FROM accountant WHERE id='$value' ";
  	mysqli_query($conn,$query);
  	header("location:va.php");
?>