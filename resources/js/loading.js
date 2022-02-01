$(function() {
    $('.container-fluid').css('display','none');
    $('.loading').css('display','block');
});
    
$(window).on('load', function () { //全ての読み込みが完了したら実行
    $('.loading').delay(900).fadeOut(800);
    $('.container-fluid').delay(1700).queue(function(){
        $(this).css('display', 'block').fadeIn();
    });
});


