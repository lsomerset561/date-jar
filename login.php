<?php
include("inc/header.php");

if ( !($_SERVER['REQUEST_METHOD'] === 'POST') ) {?>
	  <form method="post" action="">
	  	<div class="form-horizontal">
	  		<div class="form-group">
	  			<label for="username" class="col-xs-3 col-xs-offset-2 col-sm-2 col-sm-offset-3 col-md-offset-3 col-lg-1 col-lg-offset-4">Username:</label>
		  <input type="text" id='username' name="username" class="col-xs-4 col-md-2" value="" />
	  		</div>
	  	</div>
		<div class="form-horizontal">
			<div class="form-group">
				<label for="password" class="col-xs-3 col-xs-offset-2 col-sm-2 col-sm-offset-3 col-md-offset-3 col-lg-1 col-lg-offset-4">Password:</label>
			<input type="password" id='password' name="password" class="col-xs-4 col-md-2" value="" />
			</div>
			
		</div>
		<input type="submit" class="btn btn-default btn-lg col-xs-4 col-xs-offset-5 col-sm-offset-5 col-md-2 col-md-offset-5" name="enter" value="ENTER" />
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
		  die("<h3 class='text-center'>Your username/password is incorrect.</h3><h3 class='text-center'>Please go back to the <a href='login.php'>login page</a> & enter your credentials.</h3>");
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