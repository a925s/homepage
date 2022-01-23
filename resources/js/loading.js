// スクロールを禁止する関数
function noScroll(event) {
    event.preventDefault();
}

//logoの表示
$(window).on('load',function(){
    // スクロール禁止(SP)
    document.addEventListener('touchmove', noScroll, { passive: false });
    // スクロール禁止(PC)
    document.addEventListener('mousewheel', noScroll, { passive: false });

    $(".loading-5").delay(3600).fadeOut('slow');
    $(".loading").delay(4500).fadeOut('slow', function(){
        // スクロール禁止を解除(SP)
        document.removeEventListener('touchmove', noScroll, { passive: false });
        // スクロール禁止を解除(PC)
        document.removeEventListener('mousewheel', noScroll, { passive: false });
    });
});

