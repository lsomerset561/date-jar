<?php include("inc/header.php"); ?>
	
<div class="col-xs-12 col-md-7">
	<h3 class="text-center">Enter at least two date ideas &amp; I'll randomly choose one for you!</h3>
</div> <!-- start header -->
<div class="col-xs-12 col-md-6">
					<h6>&nbsp;</h6>
</div> <!-- end second empty col for vertical spacing -->
<div class="row">
	<a href="notloggedin.php" id="start-button">
		<button class="col-xs-10 col-xs-offset-1 col-sm-4 col-md-3 col-md-offset-0 btn btn-default btn-lg" type="submit" name="start" value="start">
			Continue without Login
		</button>
	</a>
	<div class="hidden-sm hidden-md hidden-lg col-xs-12">
					<h6>&nbsp;</h6>
	</div> <!-- end third empty col for vertical spacing -->
	<a href="login.php" id="start-button">
		<button class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-1 btn btn-default btn-lg" type="submit" name="start" value="start">
			Login
		</button>
	</a>
</div> <!-- end of start btns -->

<?php include("inc/footer.php"); ?>