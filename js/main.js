$(function () {
	'use strict';
	$(window).scroll(function (){
		// window.console.log($('.navbar').height() + ' height');
		// window.console.log($(window).scrollTop() + ' scrolltop');

		var navbar = $('.navbar');
		if ($(window).scrollTop() >= navbar.height()) {
			if (!navbar.hasClass( "scrolled" ))
				navbar.addClass('scrolled');
		} else {
			if (navbar.hasClass( "scrolled" ))
				navbar.removeClass('scrolled');
		}

		// add selected class to the selected tab

		$(".tab-switch li").click(function () {
			// Add selected class to the active link
			$(this).addClass('selected').siblings().removeClass('selected');
			// hide all tabs contents
			$('.tabs-section .tabs-content > div').hide();
			// show tab contents related to this tab
			$('.'+$(this).data('class')).show();
			// window.console.log($(this).data('class'));
		});
	});
});