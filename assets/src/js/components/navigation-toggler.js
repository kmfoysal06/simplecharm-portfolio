(function($){
	$('.simplecharm-portfolio-navigation-toggler').on('click',function(e){
		e.preventDefault();
		$(this).siblings('#simplecharm-portfolio-navigation').slideToggle();
	})
})(jQuery)