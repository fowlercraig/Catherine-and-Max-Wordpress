// @codekit-append "_notifications.js"
// @codekit-append "_mobilemenu.js"

$(document).ready(function(){

	$(".wallpaper").background();
	$(".carousel").carousel();
	$(".equal").equalize();
	$(".cart-item").equalize({
		target: ".cart-item-cell"
	});
	$(".swap").swap();

	$(window).scroll(function () {
    	$(".centered .fs-row").css("marginTop", ($(this).scrollTop() / 1.5) + "px");
	});

	var options = {
        offset: 500,
        classes: {
            clone:   'banner--clone',
            stick:   'banner--stick',
            unstick: 'banner--unstick'
        },
        onInit: function () {
        	$(".swap").swap();
        },
    };

    // Initialise with options
    var banner = new Headhesive('#header', options);

});