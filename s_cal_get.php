<?php
	require('db_connect.php');
	$sql="select AD_Objective from academicday as a inner join student as s where a.AD_Date='".$_GET['date']."' and s.Student_ID=1";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
	echo json_encode($row);
?>