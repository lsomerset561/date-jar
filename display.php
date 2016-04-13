<?php
include("inc/functions.php");

$randomIdea = getRandomIdea();

if (isset ($_POST['pickAgain'])) {
	header("location:display.php");
	exit;
} elseif (isset ($_POST['startOver'])) {
	$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	$query3 = "TRUNCATE jar;";
	$result_obj = mysqli_query($link, $query3);
	header("location:index.php");
	exit;
}

include("inc/header.php");
?>

	<h1>&nbsp;</h1>
</div> <!-- end empty col for vertical spacing -->

<div class="col-xs-12 col-md-7">		
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="text-center">Your randomly chosen date idea is...</h3>
		</div>
		<div class="panel-body">
			<h4 class="text-center">
				<?php echo htmlspecialchars($randomIdea); ?>
			</h4>
		</div>
	</div> <!-- display the random choice -->

	<div class="row spacer">
		<form action="" method="post">
			<button class="col-xs-3 col-xs-offset-1 btn btn-default btn-lg" type="submit" name="pickAgain">
				Pick Again
			</button>
			<button class="col-xs-3 col-xs-offset-4 btn btn-default btn-lg" type="submit" name="startOver">
				Start Over
			</button>
		</form>
	</div> <!-- try again/start over btn -->
</div>

<?php include("inc/footer.php"); ?>