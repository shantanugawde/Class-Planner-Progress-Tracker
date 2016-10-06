<?php
	require('db_connect.php');
	date_default_timezone_set('Asia/Kolkata');
	$dates=array();
	$days=array();
	$i=0;
	$today=getdate();
	$dates[$i]=date('Y-m-d'); 
	$temp=strtotime($dates[$i]);
	$days[$i]=date("w",$temp);
	for($i=1;$i<7;$i++){
		$temp=strtotime("+1 days", strtotime($dates[$i-1]));
		$dates[$i] = date('Y-m-d', $temp);
		$temp=strtotime($dates[$i]);
		$days[$i]=date("w",$temp);
	}
	$obj=array();
	$k=0;
	for($i=0;$i<7;$i++){
		if($days[$i]!=0 || $days[$i]!=6){
			$sql="select AD_Objective from academicday where AD_Date='".$dates[$i]."'";
			$result=mysqli_query($conn,$sql);
			$str="";
			while($row=$result->fetch_assoc()){
				$str.=$row['AD_Objective'];
				$str.="<br>";
			}
			$obj[$days[$i]]=$str;
		}
	}
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<title>Weekly Objectives</title>


		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link rel="stylesheet" href="cards.css">
		
		</head>
		<style>
		body{
		background-image: url(/books.jpg);
		background-position: center;
		background-size: cover;
		}
	</style>

	<body>
		<?php
     $header_active=1;
     include 'header.php';?>
		<div class ="mdl-grid">
			<div class="mdl-cell mdl-cell--1-col " >
			</div>
			<div class="mdl-cell mdl-cell--2-col">
				<div class="typo-styles__demo mdl-typography--display-1" >Monday</div>
				<div class = "mdl-grid"></div>
				<div class="demo-card-event mdl-card-obj mdl-shadow--2dp">
				 <div class="mdl-card__title mdl-card--expand">
					<p>
					  <br>
					  <?php
						echo $obj[1];
					  ?>
					</p>
					
				  </div>
				  
				</div>
			</div>
			<div class="mdl-cell mdl-cell--2-col">
				<div class="typo-styles__demo mdl-typography--display-1" >Tuesday</div>
				<div class = "mdl-grid"></div>
				<div class="demo-card-event mdl-card-obj mdl-shadow--2dp">
				 <div class="mdl-card__title mdl-card--expand">
					<p>
					  <br>
					   <?php
						echo $obj[2];
						?>
					</p>
					
				  </div>
				  
				</div>
			</div>
			<div class="mdl-cell mdl-cell--2-col">
				<div class="typo-styles__demo mdl-typography--display-1" >Wednesday</div>
				<div class = "mdl-grid"></div>
				<div class="demo-card-event mdl-card-obj mdl-shadow--2dp">
				 <div class="mdl-card__title mdl-card--expand">
					<p>
						<br>
						<?php
						echo $obj[3];
						?>
					</p>
					
				  </div>
				  
				</div>
			</div>
			<div class="mdl-cell mdl-cell--2-col">
				<div class="typo-styles__demo mdl-typography--display-1" >Thursday</div>
				<div class = "mdl-grid"></div>
				<div class="demo-card-event mdl-card-obj mdl-shadow--2dp">
				 <div class="mdl-card__title mdl-card--expand">
					<p>
					  <br>
					  <?php
						echo $obj[4];
						?>
					</p>
					
				  </div>
				  
				</div>
				
			</div>
			<div class="mdl-cell mdl-cell--2-col">
				<div class="typo-styles__demo mdl-typography--display-1" >Friday</div>
				<div class = "mdl-grid"></div>
				<div class="demo-card-event mdl-card-obj mdl-shadow--2dp">
				 <div class="mdl-card__title mdl-card--expand">
					<p>
						<br>
						<?php
						echo $obj[5];
						?>
					</p>
				  </div>
				</div>
			</div>
		</div>

	</body>
</html>