window.onscroll = function () {
    if (window.pageYOffset > 50) {
        header.classList.add("header-scrolled");
    } else {
        header.classList.remove("header-scrolled");
    }
};

$(document).ready(function(){
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
        $(this).toggleClass('open');
    });
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


  function disableVideoControls() { 
	var video = document.getElementById("backround-video");
	video.removeAttribute("controls"); 
 };