<?php
	require('db_connect.php');
	$subjects=array();
	$sql="select S_Name from subject as s inner join teacherclass as t inner join collegeclass as c where T_ID=1 and CC_Name='".$_GET['class1']."'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$subjects[]=$row;
	}
	echo json_encode($subjects);
?>