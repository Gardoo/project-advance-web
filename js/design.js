{

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}


function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

/***********************Login Form*************************/

function admin(){
	 	document.getElementById("form").style.display = "flex";

	 }
	 function closeForm(){
	 	document.getElementById("form").style.display = "none";

	 }
	 function openLogin(){
	 	document.getElementById("form2").style.display = "flex";
	 	document.getElementById("myNav").style.width = "0%";

	 }
	 function closeForm2(){
	 	document.getElementById("form2").style.display = "none";

}	



//Get the button
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


 }
 