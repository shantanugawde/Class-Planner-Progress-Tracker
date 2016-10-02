<?php
	require('db_connect.php');
	$modules=array();
	$today_date = date("Y-m-d");
	$sql="select M_Name from module where M_Sub=(select S_ID from subject where S_Name='".$_GET['subj']."') and '".$today_date."'<=(SELECT End_Date from lessonplan where M_ID=LP_Module)";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$modules[]=$row;
	}
	echo json_encode($modules);
?>