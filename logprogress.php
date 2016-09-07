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

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<script src="log.js"></script>
		
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
				<div class="mdl-cell mdl-cell--5-col mdl-cell--4-offset">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input class="mdl-textfield__input" type="text" id="cclass" value="Class" readonly tabIndex="-1">
						
						<label for="cclass" class="mdl-textfield__label">Class</label>
						<ul for="cclass" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" style="text-align:center;border:none">
							<li class="mdl-menu__item" value="1">SE Comps</li>
							<li class="mdl-menu__item" value="2">TE Comps</li>
							<li class="mdl-menu__item" value="3">BE Comps</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--5-col mdl-cell--4-offset">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input class="mdl-textfield__input" type="text" id="subject" value="Subject" readonly tabIndex="-1">
						
						<label for="subject" class="mdl-textfield__label">Subject</label>
						<ul for="subject" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" id="sub" style="text-align:center;border:none">
						</ul>
					</div>
				</div>
			</div>
			
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--5-col mdl-cell--4-offset">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
						<input class="mdl-textfield__input" type="text" id="module" value="Module" readonly tabIndex="-1">
						
						<label for="module" class="mdl-textfield__label">Module</label>
						<ul for="module" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" id="mod" style="text-align:center;border:none">
						</ul>
					</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--5-col mdl-cell--3-offset">
					<div class="form-control-wrapper">
						<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="0" step="5" placeholder="Progress">
					</div>
				</div>
			</div>
			
			<div class="mdl-grid">
			  <div class="mdl-cell mdl-cell--5-col mdl-cell--5-offset">
				<input type ="submit"class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Submit">
			  </div>
			</div>

	</body>
</html>