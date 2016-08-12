<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<title>Android</title>

    <!-- Page styles -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		
		<!-- jQuery CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
		
		<!-- Zabuto Calendar -->
		<script src="http://www.zabuto.com/dev/calendar/zabuto_calendar.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://www.zabuto.com/dev/calendar/zabuto_calendar.min.css">
		
		<script type="application/javascript">
			$(document).ready(function () {
					$("#my-calendar").zabuto_calendar();
			});
		</script>
		
	</head>

	<body>
	
		
		<header class="docs-layout-header mdl-layout__header">			
				<?php
					include "header.php";
				?>
		</header>

		<div class ="mdl-grid">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset" >
				<div id="my-calendar"></div>
			</div>
		</div>
	</body>
</html>