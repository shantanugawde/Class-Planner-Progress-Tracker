<?php
	require('db_connect.php');
	date_default_timezone_set('Asia/Kolkata');
	$sql="select distinct CC_Name, a.CC_ID from collegeclass as a join teacherclass as tc where tc.T_ID=1";
	$result=mysqli_query($conn,$sql);
	$jsonData = array();
	while ($arr = $result->fetch_assoc()) {
		$jsonData[] = $arr;
	}
	echo json_encode($jsonData);
?>