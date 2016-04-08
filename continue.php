<?php
if (isset ($_POST['done'])) {
	header("location:display.php");
	exit;
} elseif (isset ($_POST['addIdea'])) {
	header("location:continue.php");
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
		<form action="" method="post">
			<div class="row">
				<h4 class="text-center">Enter another date idea:</h4>
			</div> <!-- enter idea header -->
			<div class="form-horizontal">
				<div class="form-group">
					<label for="idea" class="sr-only">Enter another date idea:</label>
					<div class="col-xs-8 col-xs-offset-2">
						<input type="text" class="form-control" id="idea" name="idea" />
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
						<input type="radio" name="dwelling" value="indoors">indoors
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling" value="outdoors">outdoors
					</label>
				</div>
			</div> <!-- details: in/outdoors -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">2.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="region" value="in_town">in town
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="region" value="out_of_town">out of town
					</label>
				</div>
			</div> <!-- details: in/out of town -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1 col-xs-offset-3">3.</h4>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price" value="$">less than &#36;20
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price" value="$$">&#36;20 - &#36;50
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price" value="$$$">greater than &#36;50
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