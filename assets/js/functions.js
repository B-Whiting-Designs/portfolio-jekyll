$(function() {
    var header = $(".navbar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
            header.removeClass("bg-transparent");
        } else {
			header.addClass("bg-transparent");
		}
    });
  
});