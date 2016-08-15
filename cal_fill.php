<?php
	require('db_connect.php');
	$sql="delete from academicday where AD_Date='".$_GET['date']."'";
	mysqli_query($conn,$sql);
	$sql="insert into `academicday` (`AD_Date`,`AD_Objective`) values ('".$_GET['date']."','".$_GET['obj']."')";
	mysqli_query($conn,$sql);
	echo $sql;
?>