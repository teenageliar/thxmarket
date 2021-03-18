// JavaScript Document
$(document).ready(
				function(){
					$('#tittle').click(
						function(){
							
							$('#menu').fadeToggle(800);
							$('#header2').slideToggle(800);
							}
						);
				}
			);
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$(function(){
	$("#myDatePicker").datepicker({
		dateformat: 'DD-mm-yy'
	});
});
$(function(){
	$('#myTabs').tabs();
});
function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = isFullscreen ? "block" : "none";
        }