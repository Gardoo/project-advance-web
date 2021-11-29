$(document).ready(function() {

	//============ TO TOP ============
	var gotop = $("#go-top");

	//------------ show ------------
	$(window).scroll(function() {
		var disp = ($(this).scrollTop() > 10) ? "block" : "none";
		gotop.css("display", disp);
		return false;
	});

	//------------ go ------------
	$(gotop).on("click", function() {
		$("html").animate({scrollTop: 0}, "fast");
		return false;
	});
});

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}


function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

/***********************Login Form*************************/

function admin() {
	document.getElementById("form").style.display = "flex";
}

function closeForm() {
	document.getElementById("form").style.display = "none";
}

function openLogin() {
	document.getElementById("form2").style.display = "flex";
	document.getElementById("myNav").style.width = "0%";
}

function closeForm2() {
	document.getElementById("form2").style.display = "none";
}