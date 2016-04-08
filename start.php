<?php
function getIdeaInfo() {
	define("MYSQLUSER", "root");
	define("MYSQLPASS", "");
	define("HOSTNAME", "localhost");
	define("MYSQLDB", "capstone");
	
	$idea1 = $_POST['idea1'];
	$dwelling1 = $_POST['dwelling1'];
	$region1 = $_POST['region1'];
	$price1 = $_POST['price1'];
	$idea2 = $_POST['idea2'];
	$dwelling2 = $_POST['dwelling2'];
	$region2 = $_POST['region2'];
	$price2 = $_POST['price2'];
	
	$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if ($connection->connect_error) {
		die('Connect Error: ' . $connection->connect_error);
	} else {
		echo 'Successful connection to MySQL <hr />';
	}
	
	$query = "INSERT INTO jar (idea, dwelling, region, price) VALUES ";
	$query .= "('$idea1', '$dwelling1', '$region1', '$price1'), ";
	$query .= "('$idea2', '$dwelling2', '$region2', '$price2');";
	
	if (!$result = $connection->query($query)) {
		echo "Unable to add entry<br />";
	} else {
		echo "New entry successfully added<br />";
	}
}

if (isset ($_POST['done'])) {
	getIdeaInfo();
	//header("location:display.php");
	//exit;
} elseif (isset ($_POST['addIdea'])) {
	getIdeaInfo();
	//header("location:continue.php");
	//exit;
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
		<form action="" method="post">
			<div class="row">
				<h4 class="text-center">Enter your first date idea:</h4>
			</div> <!-- enter idea header -->
			<div class="form-horizontal">
				<div class="form-group">
					<label for="idea" class="sr-only">Enter your first date idea:</label>
					<div class="col-xs-8 col-xs-offset-2">
						<input type="text" class="form-control" id="idea1" name="idea1" />
					</div>
				</div>
			</div> <!-- enter idea input -->
			<div class="row">
				<div class="col-xs-3 col-xs-offset-2">
					<h4 class="text-left">Is this idea...</h4>
				</div>
			</div> <!-- idea details header -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">1.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling1" value="indoors">indoors
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling1" value="outdoors">outdoors
					</label>
				</div>
			</div> <!-- details: in/outdoors -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">2.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="region1" value="in_town">in town
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="region1" value="out_of_town">out of town
					</label>
				</div>
			</div> <!-- details: in/out of town -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">3.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price1" value="$">less than &#36;20
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price1" value="$$">&#36;20 - &#36;50
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price1" value="$$$">greater than &#36;50
					</label>
				</div>
			</div> <!-- details: price -->
			<hr />
			<div class="row">
				<h4 class="text-center">Enter your second date idea:</h4>
			</div> <!-- enter idea header -->
			<div class="form-horizontal">
				<div class="form-group">
					<label for="idea" class="sr-only">Enter your second date idea:</label>
					<div class="col-xs-8 col-xs-offset-2">
						<input type="text" class="form-control" id="idea2" name="idea2" />
					</div>
				</div>
			</div> <!-- enter idea input -->
			<div class="row">
				<div class="col-xs-3 col-xs-offset-2">
					<h4 class="text-left">Is this idea...</h4>
				</div>
			</div> <!-- idea details header -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">1.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling2" value="indoors">indoors
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling2" value="outdoors">outdoors
					</label>
				</div>
			</div> <!-- details: in/outdoors -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">2.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="region2" value="in_town">in town
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="region2" value="out_of_town">out of town
					</label>
				</div>
			</div> <!-- details: in/out of town -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">3.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price2" value="$">less than &#36;20
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price2" value="$$">&#36;20 - &#36;50
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price2" value="$$$">greater than &#36;50
					</label>
				</div>
			</div> <!-- details: price -->
			<div class="row spacer">
			    <button class="col-xs-2 col-xs-offset-2 btn btn-default btn-lg" type="submit" name="done">
					Done
				</button>
				<button class="col-xs-2 col-xs-offset-4 btn btn-default btn-lg" type="submit" name="addIdea">
					Add Idea
				</button>
			</div> <!-- done/add idea btn -->
		</form>
</body>
</html>