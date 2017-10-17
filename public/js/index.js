$(document).ready(function(){
    var vid = document.getElementById("intro");
    var vid_source_mp4 = document.getElementById("video_source_mp4");
    var vid_source_webm = document.getElementById("video_source_webm");
    var iframes = $('iframe');
    var isChatFirstLoad = true;

    vid.onended = function(){
        $("#video_play").show();
        vid_source_mp4.setAttribute('src', 'public/vids/video_2.mp4');
        vid_source_webm.setAttribute('src', 'public/vids/video_2.webm');
        vid.load();
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
    $('#video_play').click(function(){
        $("#video_play").hide();
        vid.play();
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
    $('.gallery_photo').css('height', windowHeight);
    $('.article_page_image').css('height', windowHeight);
}