$(function() {
	$('.btn-nav').on("click", function(){
		$(this).toggleClass('open');
		$('.gnav-box').toggleClass('open');
	});
});