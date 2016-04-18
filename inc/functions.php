<?php
define("MYSQLUSER", $_SESSION['username']);
define("MYSQLPASS", $_SESSION['password']);
define("HOSTNAME", "localhost");
define("MYSQLDB", "capstone");

function getErrorMessage() {
	echo "<p class='error-message text-center'>Please complete ALL of the fields below.</p>";
}

function isContinueFormEmpty() {
	if ( empty($_POST['idea']) || empty($_POST['dwelling']) || empty($_POST['region']) || empty($_POST['price']) ) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function getContinueFormInfo() {
	$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

	$idea = trim( filter_input(INPUT_POST, 'idea', FILTER_SANITIZE_STRING) );
	$dwelling = $_POST['dwelling'];
	$region = $_POST['region'];
	$price = $_POST['price'];

	$query = "INSERT INTO jar (idea, dwelling, region, price) VALUES ";
	$query .= "('$idea', '$dwelling', '$region', '$price');";

	mysqli_query($link, $query);
}

function isStartFormEmpty() {
	if ( empty($_POST['idea1']) || empty($_POST['dwelling1']) || empty($_POST['region1']) || empty($_POST['price1']) || empty($_POST['idea2']) || empty($_POST['dwelling2']) || empty($_POST['region2']) || empty($_POST['price2']) ) {

		return TRUE;
	} else {
		return FALSE;
	}
}

function getStartFormInfo() {
	$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

	$idea1 = trim( filter_input(INPUT_POST, 'idea1', FILTER_SANITIZE_STRING) );
	$dwelling1 = $_POST['dwelling1'];
	$region1 = $_POST['region1'];
	$price1 = $_POST['price1'];
	$idea2 = trim( filter_input(INPUT_POST, 'idea2', FILTER_SANITIZE_STRING) );
	$dwelling2 = $_POST['dwelling2'];
	$region2 = $_POST['region2'];
	$price2 = $_POST['price2'];

	$query = "INSERT INTO jar (idea, dwelling, region, price) VALUES ";
	$query .= "('$idea1', '$dwelling1', '$region1', '$price1'), ";
	$query .= "('$idea2', '$dwelling2', '$region2', '$price2');";

	mysqli_query($link, $query);
}

function getRandomIdea() {
	$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

	$query1 = "SELECT COUNT(idea) FROM jar;";
	$result_obj = mysqli_query($link, $query1);
	$result = mysqli_fetch_row($result_obj);
	$numOfIdeas = $result[0];

	$query2 = "SELECT * FROM jar WHERE idea_id = " . rand(1, $numOfIdeas) . ";";
	$result_obj = mysqli_query($link, $query2);
	$result = mysqli_fetch_array($result_obj, MYSQLI_ASSOC);
	return $result['idea'];
}