<?php include("inc/header.php"); ?>

<div id="start">
	<div class="col-xs-12 col-md-6">
		<form action="" method="post">
			<div class="row">
				<h4 class="col-xs-12 text-center">Enter your first date idea:</h4>
			</div> <!-- enter idea header -->
			<div class="form-horizontal">
				<div class="form-group">
					<label for="idea" class="sr-only">Enter your first date idea:</label>
					<div class="col-xs-12">
						<input type="text" class="form-control" id="idea1" name="idea1" />
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
					<h4 class="col-xs-1">1.</h4>
					<label class="col-xs-3 col-xs-offset-1 radio-inline">
						<input type="radio" name="dwelling1" value="indoors">indoors
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling1" value="outdoors">outdoors
					</label>
				</div>
			</div> <!-- details: in/outdoors -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1">2.</h4>
					<label class="col-xs-3 col-xs-offset-1 radio-inline">
						<input type="radio" name="region1" value="in_town">in town
					</label>
					<label class="col-xs-4 radio-inline">
						<input type="radio" name="region1" value="out_of_town">out of town
					</label>
				</div>
			</div> <!-- details: in/out of town -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1">3.</h4>
					<label class="col-xs-3 col-xs-offset-1 radio-inline">
						<input type="radio" name="price1" value="$">less than &#36;20
					</label>
					<label class="col-xs-3 radio-inline">
						<input type="radio" name="price1" value="$$">&#36;20 - &#36;50
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price1" value="$$$">greater than &#36;50
					</label>
				</div>
			</div> <!-- details: price -->
			<hr />
			<div class="row">
				<h4 class="col-xs-12 text-center">Enter your second date idea:</h4>
			</div> <!-- enter idea header -->
			<div class="form-horizontal">
				<div class="form-group">
					<label for="idea" class="sr-only">Enter your second date idea:</label>
					<div class="col-xs-12">
						<input type="text" class="form-control" id="idea2" name="idea2" />
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
					<h4 class="col-xs-1">1.</h4>
					<label class="col-xs-3 col-xs-offset-1 radio-inline">
						<input type="radio" name="dwelling2" value="indoors">indoors
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="dwelling2" value="outdoors">outdoors
					</label>
				</div>
			</div> <!-- details: in/outdoors -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1">2.</h4>
					<label class="col-xs-3 col-xs-offset-1 radio-inline">
						<input type="radio" name="region2" value="in_town">in town
					</label>
					<label class="col-xs-4 radio-inline">
						<input type="radio" name="region2" value="out_of_town">out of town
					</label>
				</div>
			</div> <!-- details: in/out of town -->
			<div class="form-horizontal">
				<div class="form-group">
					<h4 class="col-xs-1">3.</h4>
					<label class="col-xs-3 col-xs-offset-1 radio-inline">
						<input type="radio" name="price2" value="$">less than &#36;20
					</label>
					<label class="col-xs-3 radio-inline">
						<input type="radio" name="price2" value="$$">&#36;20 - &#36;50
					</label>
					<label class="col-xs-2 radio-inline">
						<input type="radio" name="price2" value="$$$">greater than &#36;50
					</label>
				</div>
			</div> <!-- details: price -->
			<div class="row spacer">
				<button class="col-xs-3 btn btn-default btn-lg done-btn" type="submit" name="done">
					Done
				</button>
				<button class="col-xs-4 col-xs-offset-5 col-md-offset-5 btn btn-default btn-lg add-btn" type="submit" name="addIdea">
					Add Idea
				</button>
			</div> <!-- done/add idea btn -->
		</form>
	</div>
</div>

<div id="panel">
	<div class="col-xs-12 col-md-7">		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-center">Your randomly chosen date idea is...</h3>
			</div>
			<div class="panel-body">
				<h4 class="text-center" id="display"></h4>
			</div>
		</div> <!-- display the random choice -->

		<div class="row spacer">
			<form action="" method="post">
				<button class="col-xs-5 btn btn-default btn-lg" id="pick-again" type="submit" name="pickAgain">
					Pick Again
				</button>
				<button class="col-xs-5 col-xs-offset-2 btn btn-default btn-lg" id="start-over" type="submit" name="startOver">
					Start Over
				</button>
			</form>
		</div> <!-- try again/start over btn -->
	</div>
</div>

<?php include("inc/footer.php"); ?>