<?php
	require('db_connect.php');
	$sql="insert into lessonplan(Start_Date,End_Date,LP_Module) values ('".$_GET['sdate']."','".$_GET['edate']."','".$_GET['lpm']."')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
?>