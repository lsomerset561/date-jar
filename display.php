<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "");
define("HOSTNAME", "localhost");
define("MYSQLDB", "capstone");

$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

$query = "SELECT COUNT(idea) FROM jar;";

$result = mysqli_query($link, $query);
$numOfIdeas = mysqli_fetch_row($result);
echo $numOfIdeas[0];

if (isset ($_POST['pickAgain'])) {
	header("location:display.php");
	exit;
} elseif (isset ($_POST['startOver'])) {
	header("location:index.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- Mobile first: ensures proper rendering & disables zooming capabilities on mobile (from Boostrap) -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>Date Jar</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row spacer">
			<div class="col-xs-12 col-sm-2 col-sm-offset-10"> <!-- sm to help gauge xs width -->
				<h1 class="text-uppercase text-center">Date Jar</h1>
			</div>
		</div> <!-- page title -->
		<div class="row spacer">
			<div class="col-xs-12">
				<img src="http://placehold.it/400x350" class="img-responsive center-block" alt="jar">
			</div>
		</div> <!-- img -->
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="text-center">Your chosen date idea is...</h4>
			</div>
			<div class="panel-body">
				
			</div>
		</div> <!-- display the random choice -->
		
		<div class="row spacer">
			<form action="" method="post">
				<button class="col-xs-2 col-xs-offset-2 btn btn-default btn-lg" type="submit" name="pickAgain">
					Pick Again
				</button>
				<button class="col-xs-2 col-xs-offset-4 btn btn-default btn-lg" type="submit" name="startOver">
					Start Over
				</button>
			</form>
		</div> <!-- try again/start over btn -->
	</div>
</body>
</html>