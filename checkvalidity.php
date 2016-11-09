<?php
	session_destroy();
	session_start();
	require('db_connect.php');
	$sql = "select type,class_id from login where ID='".$_POST['uname']."' and password='".$_POST['pwd']."'";
	echo $sql;
	$result = mysqli_query($conn,$sql);
	$row = $result->fetch_assoc();
	if(isset($row))
	{
		if($row['type']=="student")
		{
			$_SESSION['class_id'] = $row['class_id'];
			header('Location:s_calendar.php');
		}
		else
		{
			header('Location:t_calendar.php');
		}
	}
	else
	{
		header('Location:login.php');
	}
?>