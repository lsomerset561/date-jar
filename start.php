<?php
include("inc/header.php");
include("inc/functions.php");

if (isset ($_POST['done'])) {
	if ( isStartFormEmpty() ) {
		getErrorMessage();
	} else {
		getStartFormInfo();
		header("location:display.php");
		exit;
	}
} elseif (isset ($_POST['addIdea'])) {
	if ( isStartFormEmpty() ) {
		getErrorMessage();
	} else {
		getStartFormInfo();
		header("location:continue.php");
		exit;
	}
}
?>

	&nbsp;
</div> <!-- end empty col for vertical spacing -->

<div class="col-xs-12 col-md-6">
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
			<div class="col-xs-3 col-xs-offset-2 col-md-12">
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
				<label class="col-xs-2 col-md-3 radio-inline">
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
				<label class="col-xs-2 col-md-3 radio-inline">
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
			<div class="col-xs-3 col-xs-offset-2 col-md-12">
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
				<label class="col-xs-2 col-md-3 radio-inline">
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
				<label class="col-xs-2 col-md-3 radio-inline">
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
			<button class="col-xs-3 col-xs-offset-4 col-md-offset-5 btn btn-default btn-lg" type="submit" name="addIdea">
				Add Idea
			</button>
		</div> <!-- done/add idea btn -->
	</form>
</div>

<?php include("inc/footer.php"); ?>