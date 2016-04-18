$header = $('#header');
$formArea = $('#form-area');
$panel = $('#panel');
var jar = [];

function displayRandomIdea() {
	var randomIdeaIndex = Math.floor( Math.random() * jar.length);
	$("#display").text(jar[randomIdeaIndex]);
}

function getIdeaLength() {
	return $(".btn").parents("form").find("input[type='text']").length;
}

function getIdeaValue(index) {
	return $(".btn").parents("form").find("input[type='text']")[index].value;
}

//on startForm or continueForm: when click 'done' btn
$(".done-btn").on("click", function(){
	//obtain input values & store in array
	if ( getIdeaLength() > 1) {
		jar.push( getIdeaValue(0) );
		jar.push( getIdeaValue(1) );
	} else {
		jar.push( getIdeaValue(0) );
	}
	//remove this form
	$(this).parents("form").remove();
	//show panel & display random choice
	$panel.show();
	displayRandomIdea();
	return false;
});

//on startForm or continueForm: when click 'add idea' btn
$(".add-btn").on("click", function(){
	//obtain input values & store in array
	if ( getIdeaLength() > 1) {
		jar.push( getIdeaValue(0), getIdeaValue(1) );
	} else {
		jar.push( getIdeaValue(0) );
	}
	//remove this form & insert continueForm after
	$(this).parent().siblings().animate({height: 0}, function() {
		$(this).empty();
	});
	$(this).parent().siblings().animate({height: "100%"}, function() {
		$(this).html(getContinueForm() );
	});
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