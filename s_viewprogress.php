<?php
	session_start();
	//echo $_SESSION['class_id']
	
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<title>View Progress</title>

		<!-- Page styles -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		
		
		<!-- jQuery CDN -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	    <!--getmdl-select-->
	    <script src="getmdl-select.min.js"></script>
	    <link rel="stylesheet" href="getmdl-select.min.css">
		
		
		<!--bootstrap-datetimepicker-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<script src="log.js"></script>
				
				<link rel="stylesheet" href="styles.css">
						<link rel="stylesheet" href="cards.css">
		<style>
			::-webkit-input-placeholder { /* WebKit, Blink, Edge */
				color:    #909;
			}
			:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    #909;
		   opacity:  1;
		}
		::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    #909;
		   opacity:  1;
		}
		:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color:    #909;
		}
		</style>
	</head>

	<body>
		<header class="docs-layout-header mdl-layout__header">			
		<?php
			include "sheader.php";
		?>
		</header>
		<h2 style="text-align:center">View Progress</h2>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>

						
			<input id="cclass" value="<?php echo $_SESSION['class_id'] ?>" hidden></input>
			<div id="sliders">
			</div>
	</body>
	<script>
	$(function(){
		//alert($('#cclass').val())
			$('#sliders').empty();
			$.ajax({
				type:"GET",
				url:"s_getprogress.php",
				dataType:"json",
				data:{
					class1: $('#cclass').val()
				},
				success:function(data){
					//alert("hi");
					var i=0,j=0;
					for(i=0;i<data.length;i++){
						var str="Subject:"+data[i].S_Name+" Module:"+data[i].M_Name+" Progress:"+data[i].progress+"%";
						$('#sliders').append('<div class="mdl-grid"><div class="mdl-cell mdl-cell--5-col mdl-cell--3-offset"><div class="form-control-wrapper">'+str+'<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="'+data[i].progress+'" step="5" placeholder=""></div></div></div>')
					}
				}
			});  
	});
	</script>
</html>