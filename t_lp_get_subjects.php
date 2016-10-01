<?php
	require('db_connect.php');
	date_default_timezone_set('Asia/Kolkata');
	$sql="select * from subject as a inner join teacherclass as tc where tc.T_ID=1 and tc.CC_ID='".$_GET['ccid']."'";
	$result=mysqli_query($conn,$sql);
	$jsonData = array();
	while ($arr = $result->fetch_assoc()) {
		$jsonData[] = $arr;
	}
	echo json_encode($jsonData);
?>