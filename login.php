<?php
include("inc/header.php");

if ( !($_SERVER['REQUEST_METHOD'] === 'POST') ) {?>
	  <form method="post" action="">
	  	<div class="form-horizontal">
	  		<div class="form-group">
	  			<label for="username" class="col-xs-3 col-xs-offset-2">Username:</label>
		  <input type="text" id='username' name="username" value="" />
	  		</div>
	  	</div>
		<div class="form-horizontal">
			<div class="form-group">
				<label for="password" class="col-xs-3 col-xs-offset-2">Password:</label>
			<input type="password" id='password' name="password" value="" />
			</div>
			
		</div>
		<input type="submit" class="btn btn-lg center-block" name="enter" value="ENTER" />
		</form>
	<?php
	}
	else {
	  $username = trim( filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) );
	  $password = trim( filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) );

	  define("MYSQLUSER", $username);
	  define("MYSQLPASS", $password);
	  define("HOSTNAME", "localhost");
	  define("MYSQLDB", "capstone");

	  // Make connection to database
	  $connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	  if ($connection->connect_error) {
		  die("<h3>Your username/password is incorrect.</h3><h3>Please <a href='login.php'>go to the login page</a> & enter your credentials.</h3>");
	  } else {
		  session_start();
		  $_SESSION['username'] = $username;
		  $_SESSION['password'] = $password;
		  header('location: start.php');
		  exit;
	  }
	}?>
</body>
</html>