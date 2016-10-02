<?php
	require('db_connect.php');
	$sql="select CC_ID from collegeclass where CC_Name='".$_GET['class1']."'";
	$result=mysqli_query($conn,$sql);
	$id=$result->fetch_assoc();
	$sql="delete from academicday where AD_Date='".$_GET['date']."' and CC_ID='".$id['CC_ID']."'";
	mysqli_query($conn,$sql);
	$sql="insert into `academicday` (`AD_Date`,`AD_Objective`,`CC_ID`) values ('".$_GET['date']."','".$_GET['obj']."','".$id['CC_ID']."')";
	
	echo $sql;
	mysqli_query($conn,$sql);
?>