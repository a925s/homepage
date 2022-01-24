$(function() {
	$('.btn-nav').on("click", function(){
		$(this).toggleClass('open');
		$('.gnav-box').toggleClass('open');
	});
});

$(function() {
	$('.official-btn').on("click", function(){
		$(this).toggleClass('open');
		$('.official-box').toggleClass('open');
	});
});

$(document).ready(function(){
	$('.message1').delay(6000).hide().fadeIn('slow');
	$('.message2').delay(6000).hide().fadeIn('slow');
});

$(document).ready(function(){
	$('.div-image').delay(11000).fadeIn('6000');
});


$(document).ready(function(){
	$('.message3').delay(13000).hide().fadeIn('slow');
	$('.message4').delay(13000).hide().fadeIn('slow');
});

$(function () {
    $(window).scroll(function () {
        const wHeight = $(window).height();
        const scrollAmount = $(window).scrollTop();
        $('.scrollanime').each(function () {
            const targetPosition = $(this).offset().top;
            if(scrollAmount > targetPosition - wHeight + 60) {
                $(this).addClass("fadeInDown");
            }
        });
    });
});