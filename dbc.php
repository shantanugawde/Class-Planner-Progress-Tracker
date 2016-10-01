<?php
	require('db_connect.php');
	date_default_timezone_set('Asia/Kolkata');
	$sql="select * from subject as a inner join teacher as t inner join teacherclass as tc where tc.T_ID=1";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
	$obj=$row['S_Name'];
	echo $obj;
	$row=$result->fetch_assoc();
	$obj=$row['S_Name'];
	echo $obj;
?>