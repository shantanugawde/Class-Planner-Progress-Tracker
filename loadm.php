<?php
	require('db_connect.php');
	$modules=array();
	$sql="select M_Name from subject as s inner join module as m where s.S_Name='".$_GET['subj']."'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		$modules[]=$row;
	}
	echo json_encode($modules);
?>