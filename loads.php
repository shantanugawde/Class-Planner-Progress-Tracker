<?php
	require('db_connect.php');
	$subjects=array();
	$sql="select S_Name from subject where S_Class=(select CC_ID from collegeclass where CC_Name='".$_GET['class1']."')";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$subjects[]=$row;
	}
	echo json_encode($subjects);
?>