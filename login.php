<!DOCTYPE html>
<html>
<head>
	<title>Login | Date Jar</title>
</head>

<body>
	<h1>Login | Date Jar</h1>
	
<!-- username & password fields with enter btn with ms5(), then show encryption on next page -->

	<?php
	if ( !($_SERVER['REQUEST_METHOD'] === 'POST') ) {?>
	  <form method="post" action="">
		  <table>
			<tr>
			  <th><label for="username">Username:</label></th>
			  <td><input type="text" id='username' name="username" value="" /></td>
			</tr>
			<tr>
			  <th><label for="password">Password:</label></th>
			  <td><input type="password" id='password' name="password" value="" /></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><input type="submit" name="enter" value="ENTER" /></td>
			</tr>
		  </table>
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
		  die("<h3>Your username/password is incorrect.  Please <a href='login.php'>go to the login page</a> & enter your credentials.</h3>");
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