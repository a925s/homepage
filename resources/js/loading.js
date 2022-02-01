$(function() {
    var h = $(window).height();
    
    $('.container-fluid').css('display','none');
    $('.loading, .loading-5').height(h).css('display','block');
});
    
  $(window).on('load', function () { //全ての読み込みが完了したら実行
    $('.loading').delay(900).fadeOut(800);
    $('.loading-5').delay(600).fadeOut(300);
    $('.container-fluid').delay(1700).css('display', 'block');
});

