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

	//============ MENU TOGGLE ============
	$(".menu, .closebtn").on("click", function() {
		var wid = ($("#myNav").css("width") == "0px") ? "100%" : "0%";
		$("#myNav").css("width", wid);
		return false;
	});

	var detach = 0;
	$(".overlay-content a[href^='#']").on("click", function(e) {
		if(detach) {
			detach = 0;
			$("html, body").animate({ scrollTop: $($.attr(e.currentTarget, 'href')).offset().top }, 500);
			return false;
		} else {
			e.preventDefault();

			var wid = ($("#myNav").css("width") == "0px") ? "100%" : "0%";
			$("#myNav").css("width", wid);

			detach = 1;
		}

		$(e.currentTarget).trigger("click");
	});
});

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