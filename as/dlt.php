<?php
	error_reporting(1);
  	$value=$_GET['del'];
  	require '../connection.php';
  	$r= mysqli_query($conn,'SELECT * FROM student');
  	$rowcount=mysqli_num_rows($r);
  	if($rowcount == 0)
  	{
   	  ?><script type="text/javascript">alert('No Record.');
      window.location = "../accoutantlogin.php";</script>
      <?php
  	}
  	$query="DELETE FROM student WHERE id='$value' ";
  	mysqli_query($conn,$query);
  	header("location:due.php");
?>