<?php
$servername="localhost";
$username="root";
$password="";
$db="classprogress";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
	die ("Connection Failed".$conn->connect_error);


$currentPath = $_SERVER['PHP_SELF']; 
	
	// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
	$pathInfo = pathinfo($currentPath); 
	
	// output: localhost
	$hostName = $_SERVER['HTTP_HOST']; 
	
	// output: http://
	$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
	
	// return: http://localhost/myproject/
	$base_url = $protocol.$hostName.$pathInfo['dirname']."/";
	//echo $base_url;
?>