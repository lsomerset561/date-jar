<?php
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
	define("MYSQLUSER", "lsomerse_resume");
	define("MYSQLPASS", "test1234?!");
	define("HOSTNAME", "localhost");
	define("MYSQLDB", "capstone");
	
	$idea = trim( filter_input(INPUT_POST, 'idea', FILTER_SANITIZE_STRING) );
	$dwelling = $_POST['dwelling'];
	$region = $_POST['region'];
	$price = $_POST['price'];
	
	$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	
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
	define("MYSQLUSER", "lsomerse_resume");
	define("MYSQLPASS", "test1234?!");
	define("HOSTNAME", "localhost");
	define("MYSQLDB", "capstone");
	
	$idea1 = trim( filter_input(INPUT_POST, 'idea1', FILTER_SANITIZE_STRING) );
	$dwelling1 = $_POST['dwelling1'];
	$region1 = $_POST['region1'];
	$price1 = $_POST['price1'];
	$idea2 = trim( filter_input(INPUT_POST, 'idea2', FILTER_SANITIZE_STRING) );
	$dwelling2 = $_POST['dwelling2'];
	$region2 = $_POST['region2'];
	$price2 = $_POST['price2'];
	
	$link = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	
	$query = "INSERT INTO jar (idea, dwelling, region, price) VALUES ";
	$query .= "('$idea1', '$dwelling1', '$region1', '$price1'), ";
	$query .= "('$idea2', '$dwelling2', '$region2', '$price2');";
	
	mysqli_query($link, $query);
}