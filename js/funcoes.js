$(document).ready(function($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 245) {
          $("#header").addClass("navbar-fixed-top animated fadeInDown bar-menu");
        } else {
          $("#header").removeClass("navbar-fixed-top animated fadeInDown bar-menu");
        }
    });
});

$(document).ready(function(){
    $('header a[href^="#"]').bind('click.smoothscroll',function (e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);

		 	$('a').each(function () {
	      $(this).removeClass('active');
	    })
	    $(this).addClass('active');

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top- $('#header').outerHeight()
      }, 1900, 'swing', function () {
          window.location.hash = target;
      });
    });
});
