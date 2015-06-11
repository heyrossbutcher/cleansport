//Name space
var app ={};

app.popup = function(pPopup, pYt){ //pYt optional
    $('iframe').attr('src', pYt);
}
//Smooth Scroller
app.smoothScroller = function(){
	$("nav a").smoothScroll({ offset: -150 });
}

$(function(){
	//Open video
	$('.video').on('click', function(){
		$('.overlay').toggleClass('hide');
		app.popup('innerFrame', 'https://www.youtube.com/embed/XbFFA4ui05E?autoplay=1');
	});
	//Close video
	$('.close').on('click', function(){
		$('.overlay').toggleClass('hide');
		app.popup('innerFrame', '');
	});
	//
	app.smoothScroller();
});