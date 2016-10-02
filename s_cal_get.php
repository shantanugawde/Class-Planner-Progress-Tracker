<?php
	require('db_connect.php');
	$sql="select AD_Objective from academicday as a where a.AD_Date='".$_GET['date']."' and a.CC_ID=3";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
	echo json_encode($row);
?>