<?php
	require('db_connect.php');
	$sql="select CC_ID from collegeclass where CC_Name='".$_GET['class1']."'";
	$result=mysqli_query($conn,$sql);
	$id=$result->fetch_assoc();
	$sql="select AD_Objective from academicday as a where a.AD_Date='".$_GET['date']."' and a.CC_ID='".$id['CC_ID']."'";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
	echo json_encode($row);
?>