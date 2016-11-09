
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<!-- jQuery CDN -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Zabuto Calendar -->
		<script src="http://www.zabuto.com/dev/calendar/zabuto_calendar.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://www.zabuto.com/dev/calendar/zabuto_calendar.min.css">
		<link rel="stylesheet" href="styles.css">

		<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
			    <script src="getmdl-select.min.js"></script>
	    <link rel="stylesheet" href="getmdl-select.min.css">

		<!-- Page styles -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<script src="t_cal.js"></script>
				
				<link rel="stylesheet" href="styles.css">
						<link rel="stylesheet" href="cards.css">
	</head>
	<body>
		<?php
     $header_active=1;
     include 'header.php';?>
	 <h2 style="text-align:center">Calendar</h2>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--5-col mdl-cell--4-offset">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input class="mdl-textfield__input" type="text" id="cclass" name="cclass" value="Class" readonly tabIndex="-1">
						
						<label for="cclass" class="mdl-textfield__label">Class</label>
						<ul for="cclass" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" style="text-align:center;border:none">
							<li class="mdl-menu__item" value="1">SE Comps</li>
							<li class="mdl-menu__item" value="2">TE Comps</li>
							<li class="mdl-menu__item" value="3">BE Comps</li>
						</ul>
					</div>
				</div>
			</div>
	  <dialog class="mdl-dialog" id="dialog" style="width:400px">
    <h6 class="mdl-dialog__title" style="padding:2px,24px,0" id="h6"></h6>
    <div class="mdl-dialog__content" style="height:150px" id="content">
    </div>
    <div class="mdl-dialog__actions" id="buttons">
      <button type="button" class="mdl-button close">Close</button>
    </div>
  </dialog>
	 <br></br>
	 <div class="mdl-layout-container">
		<div class ="mdl-grid">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset" >
				<div id="my-calendar"></div>
			</div>
		</div>
	</div>
	</body>
</html>