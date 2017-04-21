

//jQuery('.hamburger').on('click', function() {
 //   this.toggleClass('is-active');
//});



// this does work i am done so fuck this shit.
  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu
  });



//Note: For some reason the $ alias isn't working for jQuery, but it can
//      be called using jQuery(). FeelsBadMan. Will fix in future. Maybe.

jQuery('#mobile-burger').on('click', function() {

	var elem = $(this),
		item = $('.menu__item'),
		active = 'is-active',
		play = 'menu__item--play';

	if (  elem.hasClass(active) ) {
		elem.removeClass(active);
		$(item.get().reverse()).each(function(i) {
			var row = $(this);
				setTimeout(function() {
					row.removeClass(play);
			}, 50*i);
		});
	}

	else {
		elem.addClass(active);
		item.each(function(i) {
			var row = $(this);
				setTimeout(function() {
					row.addClass(play);
			}, 50*i);
		});
	}

});