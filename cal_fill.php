<?php
	require('db_connect.php');
	$sql="delete from academicday where AD_Date='".$_GET['date']."'";
	mysqli_query($conn,$sql);
	$sql="select CC_ID from teacherclass where T_ID=1";
	$result=mysqli_query($conn,$sql);
	$id=$result->fetch_assoc();
	$sql="insert into `academicday` (`AD_Date`,`AD_Objective`,`CC_ID`) values ('".$_GET['date']."','".$_GET['obj']."','".$id['CC_ID']."')";
	mysqli_query($conn,$sql);
	echo $sql;
?>