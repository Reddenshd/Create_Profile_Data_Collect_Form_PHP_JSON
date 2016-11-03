// JavaScript Document


function ActiveInIt(){	
	$(".create_profile_form").animate({width: '750px'}, "slow");
	$("li:nth-child(5n+1)").delay(500).animate({opacity: '1.0'}, "slow");
	$("li:nth-child(5n+2)").delay(1000).animate({opacity: '1.0'}, "slow");
	$("li:nth-child(5n+3)").delay(1500).animate({opacity: '1.0'}, "slow");
	$("li:nth-child(5n+4)").delay(2000).animate({opacity: '1.0'}, "slow");
	$("li:nth-child(5n+5)").delay(2500).animate({opacity: '1.0'}, "slow");
}

function  CompleteInIt() {
	$(".complete_profile_form").animate({height: '150px'}, "slow");
	$(".complete_profile_form_title").delay(500).animate({opacity: '1.0'}, "slow");
	$(".back").delay(1000).animate({opacity: '1.0'}, "slow");
	
	$(".back").click(function(){
   		window.open('../index.html', '_self');
	});
}



