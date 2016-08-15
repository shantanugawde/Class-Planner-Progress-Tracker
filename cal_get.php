<?php
	require('db_connect.php');
	$sql="select AD_Objective from academicday where AD_Date='".$_GET['date']."'";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
	$obj=$row['AD_Objective'];
	echo json_encode($row);
?>