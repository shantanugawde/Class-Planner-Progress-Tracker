<?php
	require('db_connect.php');
	$data=array();
	$sql="select * from progresslog where C_Name='".$_GET['class1']."'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$data[]=$row;
	}
	echo json_encode($data);
?>