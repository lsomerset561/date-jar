<?php
include("inc/functions.php");

if (isset ($_POST['done'])) {
	if ( isContinueFormEmpty() ) {
		getErrorMessage();
	} else {
		getContinueFormInfo();
		header("location:display.php");
		exit;
	}
} elseif (isset ($_POST['addIdea'])) {
	if ( isContinueFormEmpty() ) {
		getErrorMessage();
	} else {
		getContinueFormInfo();
		header("location:continue.php");
		exit;
	}
}

include("inc/header.php");
?>

	&nbsp;
</div>
<div class="col-xs-12 col-md-6">
	<form action="" method="post">
		<div class="row">
			<h4 class="col-xs-12 text-center">Enter another date idea:</h4>
		</div> <!-- enter idea header -->
		<div class="form-horizontal">
			<div class="form-group">
				<label for="idea" class="sr-only">Enter another date idea:</label>
				<div class="col-xs-12">
					<input type="text" class="form-control" id="idea" name="idea" />
				</div>
			</div>
		</div> <!-- enter idea input -->
		<div class="row">
			<div class="col-xs-12">
				<h4 class="text-left">Is this idea...</h4>
			</div>
		</div> <!-- idea details header -->
		<div class="form-horizontal">
			<div class="form-group">
				<h4 class="col-xs-1 col-xs-offset-1">1.</h4>
				<label class="col-xs-3 col-xs-offset-1 radio-inline">
					<input type="radio" name="dwelling" value="indoors">indoors
				</label>
				<label class="col-xs-2 radio-inline">
					<input type="radio" name="dwelling" value="outdoors">outdoors
				</label>
			</div>
		</div> <!-- details: in/outdoors -->
		<div class="form-horizontal">
			<div class="form-group">
				<h4 class="col-xs-1 col-xs-offset-1">2.</h4>
				<label class="col-xs-3 col-xs-offset-1 radio-inline">
					<input type="radio" name="region" value="in_town">in town
				</label>
				<label class="col-xs-4 radio-inline">
					<input type="radio" name="region" value="out_of_town">out of town
				</label>
			</div>
		</div> <!-- details: in/out of town -->
		<div class="form-horizontal">
			<div class="form-group">
				<h4 class="col-xs-1 col-xs-offset-1">3.</h4>
				<label class="col-xs-3 col-xs-offset-1 radio-inline">
					<input type="radio" name="price" value="$">less than &#36;20
				</label>
				<label class="col-xs-3 radio-inline">
					<input type="radio" name="price" value="$$">&#36;20 - &#36;50
				</label>
				<label class="col-xs-2 radio-inline">
					<input type="radio" name="price" value="$$$">greater than &#36;50
				</label>
			</div>
		</div> <!-- details: price -->
		<div class="row spacer">
			<button class="col-xs-3 btn btn-default btn-lg" type="submit" name="done">
				Done
			</button>
			<button class="col-xs-4 col-xs-offset-5 col-md-offset-5 btn btn-default btn-lg" type="submit" name="addIdea">
				Add Idea
			</button>
		</div> <!-- done/add idea btn -->
	</form>
</div>

<?php include("inc/footer.php"); ?>