jQuery(document).ready(function() {
    jQuery('#mobile-burger').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.menu ul').toggleClass('active');
 
        e.preventDefault();
    });
});