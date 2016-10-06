
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
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }

	.mdl-layout {
	  align-items: center;
	  justify-content: center;
	}
    </style>
  </head>
  <body>
		<div class ="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset" >
          </div>
      </div>
	  <div class ="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset" >
          </div>
      </div>
	  <div class ="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset" >
          </div>
      </div>
	  <div class ="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset" >
          </div>
      </div>
      <div class ="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset" >
            <div class="typo-styles__demo mdl-typography--display-1" style="text-align:center;">Class Planner and Progress Tracker</div>
          </div>
      </div>
      <form action="checkvalidity.php" method="POST">
        <div class ="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset" >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"style="text-align:center;border:none">
              <input class="mdl-textfield__input" type="text" name="uname">
              <label class="mdl-textfield__label" for="uname">Username</label>
            </div>
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="password" name="pwd">
              <label class="mdl-textfield__label" for="pwd">Password</label>
            </div>
          </div>
        </div>

        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--5-offset">
            <input type ="submit"class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Login">
          </div>
        </div>
      </form>

  </body>
</html>