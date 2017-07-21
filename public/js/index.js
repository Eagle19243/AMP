var swipeDirection = 'none';
var detailScrollState = 'top';
var isScrollAtTop = true;
var isScrollAtBottom = false;

$(document).ready(function(){
    var vid = document.getElementById("bgvid");

    function vidFade() {
        vid.classList.add("stopfade");
    }

    $("#start").click(function(){
        $("#start").fadeOut(1000, function(){
            $("#banner").hide();
            $("#intro_video").show(500);
            vid.play();
        });
    });

    $("#skip").click(function(){
        vid.pause();
        vidFade();
        $("#intro_video").hide(function(){
            $("#main").show();
            $('.slider-nav').slick('slickGoTo', 0, false);
            $('.slider-nav').slick('slickSetOption', 'speed', 300, true);
        });
    });

    vid.addEventListener('ended', function()
    {
        vid.pause();
        vidFade();
        $("#intro_video").hide(function(){
            $("#main").show();
            $('.slider-nav').slick('slickGoTo', 0, false);
            $('.slider-nav').slick('slickSetOption', 'speed', 300, true);
        });
    });
    

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        arrows: true,
        dots: true,
        infinite: false,
        speed: 0,
        focusOnSelect: true
    });

    $("#preview")
    .on('edge', function(event, slick, direction) {
        if (direction == 'left') {
            $("#main").hide(function() {
                $("#chat").show();
                window.replySDK = (function(d, s, id) {
                    var o = window.replySDK || {};var js,
                    fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "https://d1fidecqhnmd5.cloudfront.net/prod/v1.3.1/dist/js/reply-sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                    o.isLoaded=false;o._e = [];o.load = function(f) { o._e.push(f);};
                    js.onload = function () { replySDK.init( widgetSettings ); };return o;
                }(document, 'script', 'reply-sdk-js'));

                replySDK.load(function () {
                    $(".Close").click(function(){
                        replySDK.close();
                    });
                    $(".Open").click(function(){
                        replySDK.open();
                    });
                    $(".Hide").click(function(){
                        replySDK.hide();
                    });
                    $(".Show").click(function(){
                        replySDK.show();
                    });
                    
                    replySDK.on("message:received", function(message){
                        console.log("on message:received", message);
                    });

                    replySDK.on("message:sent", function(message){
                        console.log("on message:sent", message);
                    });

                    replySDK.on("widget:shown", function(){
                        console.log("on widget:shown");
                    });
                    
                    replySDK.on("widget:hidden", function(){
                        console.log("on widget:hidden");
                    });
                    
                    replySDK.on("widget:opened", function(){
                        console.log("on widget:opened");
                    });
                    
                    replySDK.on("widget:closed", function(){
                        console.log("on widget:closed");
                    });         
                });
            });
        }
    })
    .on('movestart', function(e) {
        $(".slider-nav").css("transition", "0");
        if(Math.abs(e.distX) < Math.abs(e.distY)) {
            if (e.distY > 0) {
                swipeDirection = 'down';
            }
            else {
                swipeDirection = 'up';
            }
            $('.slider-nav').slick('slickSetOption', 'draggable', false, true);
        }
        else {
            if (e.distX > 0) {
                swipeDirection = 'right';
            }
            else {
                swipeDirection = 'left';
            }
        }
    })
    .on('move', function(e) {
        if (swipeDirection == 'up') {
            document.getElementById("preview").style.top = e.distY + 'px';
            if (document.getElementById("preview").getBoundingClientRect().top > 0) {
                document.getElementById("preview").style.top = '0px';
            }
        }
    })
    .on('moveend', function(e) {
        if (swipeDirection == 'up') {
            $(".slider-nav").css("transition", "0.3s");
            if (Math.abs(e.distY) > $('.slider-nav').height() * 0.3) {
                document.getElementById("preview").style.top = -$('.slider-nav').height() + 'px';
            }
            else {
                document.getElementById("preview").style.top = '0px';
            }
        }
        $('.slider-nav').slick('slickSetOption', 'draggable', true, true);
        swipeDirection = 'none';
    });

    $("#detail")
    .on('movestart', function(e) {
        if (detailScrollState == 'top') {
            isScrollAtTop = true;
            isScrollAtBottom = false;
        }
        else if (detailScrollState == 'bottom'){
            isScrollAtTop = false;
            isScrollAtBottom = true;
        }
        else {
            isScrollAtTop = false;
            isScrollAtBottom = false;
        }

        if(Math.abs(e.distX) < Math.abs(e.distY)) {
            $('.slider-for').slick('slickSetOption', 'draggable', false, true);
        }
    })
    .on('moveend', function(e) {
        $('.slider-nav').slick('slickSetOption', 'draggable', true, true);
    })
    .on('swipedown', function(e) {
        if (isScrollAtTop) {
            document.getElementById("preview").style.top = 0;
        }
    })
    .on('swipeup', function(e) {
        if (isScrollAtBottom) {
            document.getElementById("preview").style.top = 0;
        }
    });

    $('.detail-container').on('scroll', function() {
        if($(this).scrollTop() == 0) {
            detailScrollState = 'top';
        }
        else if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            detailScrollState = 'bottom';
        }
        else {
            detailScrollState = 'middle';
        }
    });

    var widgetSettings = {
        channelUuid: "e600b3b7-11d6-4b97-a79c-6ab3fed75a86",
        style: "embed", // "fixed", "embed" or "fullpage". Open the sample page for all the configuration paramaters
        appendTo: "#widget-box",
        width:"100%",
        height: "100%",
        welcomeMessage : {
            text : "Hi, I'm the Activity Finder Bot! I see you're looking for fun activities to do at the Old Port. Let's find the perfect one for you!\nWhat do you say?",
            buttons:[
                {
                    type :"postback",
                    title : "Get Started",
                    payload: "activity_finder_start"
                }
            ]
        },
    };
});