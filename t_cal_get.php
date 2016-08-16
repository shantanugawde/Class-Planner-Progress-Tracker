<?php
	require('db_connect.php');
	$sql="select AD_Objective from academicday as a inner join teacher as t inner join teacherclass as tc where a.AD_Date='".$_GET['date']."' and tc.T_ID=1";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
	echo json_encode($row);
?>