var main = function() {

var slideShow = function() {
	var activeslide = $('.activeslide');
	var nextslide = activeslide.next();
		
	if (nextslide.length == 0) {
		nextslide = $('.slide').first();
		}
	
	activeslide.fadeOut(2000).removeClass('activeslide');
	nextslide.fadeIn(2100).addClass('activeslide');
	
	};

	setInterval(slideShow,5000);

};

$(document).ready(main);
