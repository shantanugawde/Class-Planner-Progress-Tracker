<?php
	require('db_connect.php');
	date_default_timezone_set('Asia/Kolkata');
	$sql="select S_Name, S_ID from subject where S_Class=".$_GET['ccid']."";
	$result=mysqli_query($conn,$sql);
	$jsonData = array();
	while ($arr = $result->fetch_assoc()) {
		$jsonData[] = $arr;
	}
	echo json_encode($jsonData);
?>