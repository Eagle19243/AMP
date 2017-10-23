$(document).ready(function(){
    var vid_1 = document.getElementById("intro_1");
    var vid_2 = document.getElementById("intro_2");
    var iframes = $('iframe');
    var isChatFirstLoad = true;

    vid_1.onended = function(){
        $("#video_play_1").show();
        vid_1.load();
    }
    vid_2.onended = function(){
        $("#video_play_2").show();
        vid_2.load();
    }
    iframes.each(function() {
        var src = $(this).attr('src');
        $(this).data('src', src).attr('src', '');
    });
    $('#chat').click(function(){
        $('.chatscreen').css('left', 0);
        $('.chatscreen').css('right', 0);
        if (isChatFirstLoad) {
            iframes.attr('src', function() {
                return $(this).data('src');
            });
            isChatFirstLoad = false;
        }
    });
    $('#back').click(function(){
        $('.chatscreen').css('left', '100%');
        $('.chatscreen').css('right', '-100%');
    });
    $('#video_play_1').click(function(){
        $("#video_play_1").hide();
        vid_1.play();
    });
    $('#video_play_2').click(function(){
        $("#video_play_2").hide();
        vid_2.play();
    });
    $('#article_1').click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 0, true);
    });
    $('#article_2').click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 1, true);
    });
    $('#article_3').click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 2, true);
    });
    $('.parent_slick').slick({
        infinite: false
    });
    $('.video_slick').slick({
        infinite: false,
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    $('.gallery_slick').slick({
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    $('.article_slick').slick({
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    setPhotoHeight();
});

$(window).resize(function() {
    setPhotoHeight();
});

function setPhotoHeight () {
    windowHeight = $(window).innerHeight();
    $('.intro_video').css('height', windowHeight);
    $('.gallery_photo').css('height', windowHeight);
    $('.article_page_image').css('height', windowHeight);
    $('#video_play_1').css('top', '25%');
    $('#video_play_2').css('top', '75%');
}