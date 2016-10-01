<?php
	require('db_connect.php');
	$sql="select * from module where M_Sub='".$_GET['msub']."'";
	$result=mysqli_query($conn,$sql);
	$jsonData = array();
	while ($arr = $result->fetch_assoc()) {
		$jsonData[] = $arr;
	}
	echo json_encode($jsonData);
?>