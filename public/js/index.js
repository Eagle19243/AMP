$(document).ready(function(){
    var vid_1 = document.getElementById("intro_1");
    var vid_2 = document.getElementById("intro_2");
    var isChatFirstLoad = true;

    vid_1.onended = function(){
        $("#video_play_1").show();
        vid_1.load();
    }
    vid_2.onended = function(){
        $("#video_play_2").show();
        vid_2.load();
    }
    var chat_iframe = $("#chatbox_iframe");
    var src = 'https://chat-interface.herokuapp.com/?theme=bridgestone&channelID=76a21dc9-256e-4bc7-a911-1906360178df&text=start_contobox_new&theme_ext=' + document.location.origin + '/public/css/chatbox.css';
    chat_iframe.data('src', src).attr('src', '');
    $('#chat').click(function(){
        $('.chatscreen').css('left', 0);
        $('.chatscreen').css('right', 0);
        if (isChatFirstLoad) {
            chat_iframe.attr('src', function() {
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
    $('.video_slick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        if (currentSlide == 0) {
            vid_1.pause();
            $("#video_play_1").show();
        }
        else if (currentSlide == 1) {
            vid_2.pause();
            $("#video_play_2").show();
        }
    });
    $('.parent_slick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        if (currentSlide == 0) {
            vid_1.pause();
            $("#video_play_1").show();
        }
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