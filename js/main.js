$header = $('#header');
$startForm = $('#start');
$ideas = $(".done-btn").parent().siblings().find("input[type='text']");
$panel = $('#panel');
var jar = [];

function displayRandomIdea() {
	var randomIdeaIndex = Math.floor( Math.random() * jar.length);
	$("#display").text(jar[randomIdeaIndex]);
}

//on startForm or continueForm: when click 'done' btn
$(".done-btn").on("click", function(){
	//obtain input values & store in array
	if ($ideas.length > 1) {
		jar.push($ideas[0].value);
		jar.push($ideas[1].value);
	} else {
		jar.push($ideas.value);
	}
	//remove this form
	$(this).parent().parent().remove();
	//show panel & display random choice
	$panel.show();
	displayRandomIdea();
	return false;
});

//on startForm: when click 'add idea' btn
$(".add-btn").on("click", function(){
	//obtain input values & store in array
	if ($ideas.length > 1) {
		jar.push($ideas[0].value);
		jar.push($ideas[1].value);
	} else {
		jar.push($ideas.value);
	}
	//remove this form & insert continueForm after
	$(this).parent().parent().remove();
	$header.after(continueForm);
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