var jar = [];
$showError = $('#show-error');

function displayRandomIdea() {
	var randomIdeaIndex = Math.floor( Math.random() * jar.length);
	$("#display").text(jar[randomIdeaIndex]);
}

function getIdeaValues() {
	var $ideaTextField = $(".btn").parents("form").find("input[type='text']");
	jar.push ($ideaTextField[0].value);
	if ($ideaTextField.length > 1) {
		jar.push ($ideaTextField[1].value);
	}
}

//on startForm or continueForm: when click 'done' btn
$(".done-btn").on("click", function(){
	//inform user if fields are empty
	if ($(".btn").parents("form").find("input[type='text']").val() === "") {
		$showError.html("<h3 class='error-message text-center'>Please fill in the textboxes!</h3>");
	} else {
		//obtain input values & store in array
		getIdeaValues();
		//remove this form
		$(this).parents("form").remove();
		//show panel & display random choice
		$('#panel').show();
		displayRandomIdea();
	}
	return false;
});

//on startForm or continueForm: when click 'add idea' btn
$(".add-btn").on("click", function(){
	//inform user if fields are empty
	if ($(".btn").parents("form").find("input[type='text']").val() === "") {
		$showError.html("<h3 class='error-message text-center'>Please fill in the textboxes!</h3>");
	} else {
		//obtain input values & store in array
		getIdeaValues();
		//remove this form & insert continueForm after
		$(this).parent().siblings().animate({height: 0}, function() {
			$(this).empty();
		});
		$(this).parent().siblings().animate({height: "100%"}, function() {
			$(this).html(getContinueForm() );
		});
	}
	return false;
});

//on panel: when click "pick again" btn
$("#pick-again").on("click", function(){
	displayRandomIdea();
	return false;
});

//on panel: when click "start over" btn
$("#start-over").on("click", function(){
	location.reload(true);
});