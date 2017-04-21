jQuery('#mobile-burger').on('click', function() {

	var elem = jQuery(this),
		item = jQuery('.menu__item'),
		active = 'is-active',
		play = 'menu__item--play';

    //If our menu is active (i.e. it has been clicked at some point in the past)
	if (elem.hasClass(active)) {

        //Turn off the menu
		elem.removeClass(active);

        // and for each of our menu items, starting with the first, remove our trigger animation
		jQuery(item.get().reverse()).each(function(i) {

			var row = jQuery(this);

            // Set a 50ms delay betwen each one hiding
            setTimeout(function() {
                row.removeClass(play);
			}, 50*i);
		});
	}

    // Otherwise, if it's not active when clicked, make it active
	else {
		elem.addClass(active);

        //and display our menu items.
		item.each(function(i) {

			var row = jQuery(this);

            setTimeout(function() {
                row.addClass(play);
			}, 50*i);
		});
	}
});
