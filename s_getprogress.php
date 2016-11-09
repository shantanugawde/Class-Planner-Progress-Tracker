<?php
	require('db_connect.php');
	$data=array();
	$sql="select * from progresslog where C_Name=(select CC_Name from collegeclass where CC_ID='".$_GET['class1']."')";
	//echo $sql;
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$data[]=$row;
	}
	echo json_encode($data);
?>