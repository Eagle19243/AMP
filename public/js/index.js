$(document).ready(function(){
    var vid = document.getElementById("intro");
    $("#video_play").click(function(){
        $("#video_play").hide();
        vid.play();
    });
    $("#article_1").click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 0, true);
    });
    $("#article_2").click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 1, true);
    });
    $("#article_3").click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 2, true);
    });
    $('.parent_slick').slick({
        infinite: false,
        mobileFirst: true
    });
    $('.gallery_slick').slick({
        mobileFirst: true,
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    $('.article_slick').slick({
        mobileFirst: true,
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    setPhotoHeight();
});

$(window).resize(function() {
    setPhotoHeight();
});

$(window).on("orientationChange", function(event) {
     $('.parent_slick').slick('slickNext');
     $('.parent_slick').slick('slickPrev');
     $('.gallery_slick').slick('slickNext');
     $('.gallery_slick').slick('slickPrev');
     $('.article_slick').slick('slickNext');
     $('.article_slick').slick('slickPrev');
});

function setPhotoHeight () {
    windowHeight = $(window).innerHeight();
    $('.gallery_photo').css('height', windowHeight);
    $('.article_page_image').css('height', windowHeight);
}