
$(document).ready(function(){

	console.log("Hello");

	
	$("#portfolio_flters > li").click(function () {
		console.log("tets1");
		$("#portfolio_flters > li").removeClass("filter-active");
		$(this).addClass("filter-active");
	});

	$("#portfolio_flters > li").click(function () {
		var value = $(this).attr("data-filter");
		$(".portfolio-item").css("display", "none");
		if (value == "filter-all") {
			$(".portfolio-item").css("display", "block");
		} else {
			$(".portfolio-item." + value).css("display", "block");
		}
	});
	window.onscroll = function () {
		if (window.pageYOffset > 20) {
			header.classList.add("header-scrolled");
		} else {
			header.classList.remove("header-scrolled");
		}
	};


    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
        $(this).toggleClass('open');
    });


	var typing=new Typed(".type-text", {
		strings: ["", "Youtuber", "Graphics Designer", "Web Designer", "Web Developer"],
		typeSpeed: 100,
		backSpeed: 40,
		loop: true,
	});

	$('ul.tabs-ul').each(function(){
		var active, content, links = $(this).find('a');
		active = links.first().addClass('tab-current');
		content = $(active.attr('href'));
		links.not(':first').each(function () {
		$($(this).attr('href')).hide();
		});
		$(this).find('a').click(function(e){
		active.removeClass('tab-current');
		content.hide();
		active = $(this);
		content = $($(this).attr('href'));
		active.addClass('tab-current');
		content.show();        
		return false;
		});
	});



	$('.list-item > a').on('click', function(event) {
	  var target = $( $(this).attr('href') );
	  if( target.length ) {
		  event.preventDefault();
		  $('html, body').animate({
			  scrollTop: target.offset().top - 50 // set your page offset here
		  }, 1000); // set your animation speed here
	  }
	});
});