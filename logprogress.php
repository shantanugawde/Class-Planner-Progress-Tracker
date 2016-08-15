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
		<title>Module Planner</title>

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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/material.min.css"/>
		<link rel="stylesheet" href="./dpicker/css/bootstrap-material-datetimepicker.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
		<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="./dpicker/js/bootstrap-material-datetimepicker.js"></script>
		
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
					include "header.php";
				?>
		</header>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-offset"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--5-offset">
					<div class="form-control-wrapper">
						<input type="text" id="date-start" class="form-control floating-label" placeholder="Date">
					</div>
				</div>
			</div>
			
			
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--5-offset">
					<div class="form-control-wrapper">
						<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="0" step="25" placeholder="Progress">
					</div>
				</div>
			</div>
			
			<div class="mdl-grid">
			  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-offset">
				<input type ="submit"class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Submit">
			  </div>
			</div>
		<script type="text/javascript">
			$(document).ready(function()
			{	
				
				var now = moment();
				$('#date-start').bootstrapMaterialDatePicker
				({
					time: false, weekStart: 0, format: 'DD/MM/YYYY', shortTime : true, setMinDate: now
				});
				$('#date-start').bootstrapMaterialDatePicker('setMinDate', now);

				$.material.init()
			});
		</script>

	</body>
</html>