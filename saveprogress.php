<?php
	require('db_connect.php');
	$sql="select * from progresslog where M_Name='".$_POST['module']."'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result->num_rows>0)
	{
		$sql="update progresslog set progress='".$_POST['slider']."' where M_Name='".$_POST['module']."'";
		echo $sql;
		mysqli_query($conn,$sql);
	}
	else
	{

		$sql="insert into progresslog(`progress`,`M_Name`,`S_Name`,`C_Name`) values('".$_POST['slider']."','".$_POST['module']."','".$_POST['subject']."','".$_POST['cclass']."')";
		echo $sql;
		mysqli_query($conn,$sql);
	}
	header("Location:viewprogress.php");
?>