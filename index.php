<!doctype html>
<html ⚡>
    <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <title>Proof of Concept</title>
        <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
        <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
        <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
        <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
        <link rel="canonical" href="https://ampbyexample.com/components/amp-lightbox/">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            .start_normal {
                position: absolute;
                top: 8px;
                right: 8px;
                -webkit-transition: top 1s, opacity 1s;
                transition: top 1s, opacity 1s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
                outline: none;
            }
            .start_end {
                position: absolute;
                top: -100px;
                right: 8px;
                opacity: 0;
                -webkit-transition: top 1s, opacity 1s;
                transition: top 1s, opacity 1s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
                outline: none;
            }
            .topbar_show {
                position: absolute;
                right: 0;
                left: 0;
                top: 0;
                width: 100%;
                min-width: 100%;
                opacity: 0;
                z-index: 2000;
                display: table;
                table-layout: fixed;
                border-spacing: 10px;
                opacity: 1;
                -webkit-transition: opacity 1s;
                transition: opacity 1s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .learn_more {
                color: white;
            }
            .left_panel {
                display: table-cell;
                vertical-align: center;
            }
            .center_panel {
                display: table-cell;
                vertical-align: center;
            }
            .right_panel {
                display: table-cell;
                vertical-align: center;
            }
            .lightbox_content {
                background: rgba(0,0,0,0.8);
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .uparrow_normal {
                position: absolute;
                z-index: 2000;

                width: 44px;
                height: 34px;

                background-image: url(static/img/up.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                top: 50px;
                left: 50%;
                transform: translate(-50%, 0);

                cursor: pointer;
                opacity: 0.9;
            }
            .uparrow_hidden {
                display: none;
            }
            .downarrow_normal {
                position: absolute;
                z-index: 2000;

                width: 44px;
                height: 34px;

                background-image: url(static/img/down.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                bottom: 10px;
                left: 50%;
                transform: translate(-50%, 0);

                cursor: pointer;
                opacity: 0.9;
            }
            .downarrow_hidden {
                display: none;
            }
            .prevarrow_normal {
                position: absolute;
                z-index: 2000;

                width: 34px;
                height: 44px;

                background-image: url(static/img/prev.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                top: 50%;
                left: 10px;
                transform: translate(0, -50%);

                cursor: pointer;
                opacity: 0.9;
            }
            .prevarrow_hidden {
                display: none;
            }
            .nextarrow_normal {
                position: absolute;
                z-index: 2000;

                width: 34px;
                height: 44px;

                background-image: url(static/img/next.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                top: 50%;
                right: 10px;
                transform: translate(0, -50%);

                cursor: pointer;
                opacity: 0.9;
            }
            .nextarrow_hidden {
                display: none;
            }
            .video_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1010;
                opacity: 1;
                animation-name: common-fadeout;
                animation-duration: 1s;
            }
            @keyframes common-fadeout {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
            #intro_video video {
                width: auto;
                height: auto;
                left: 50%;
                transform: translateX(-50%);
            }
            .click-to-play-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }
            .poster-image {
                position: absolute;
                z-index: 1;
            }
            .poster-image img {
                object-fit: cover;
            }
            .play-icon {
                position: absolute;
                z-index: 2;

                width: 100px;
                height: 100px;

                background-image: url(static/img/play-icon.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

                cursor: pointer;
                opacity: 0.9;
            }
            .play-icon:hover, .play-icon:focus {
                opacity: 1;
            }
            .gallery_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .gallery_hide {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 100%;
                right: -100%;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .photo_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                -webkit-transition: top 0.3s, bottom 0.3s;
                transition: top 0.3s, bottom 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .photo_hide {
                position: absolute;
                top: 100%;
                bottom: -100%;
                left: 0;
                right: 0;
                -webkit-transition: top 0.3s, bottom 0.3s;
                transition: top 0.3s, bottom 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            #slide-image img {
                object-fit: cover;
            }
            .articles_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .articles_hide {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 100%;
                right: -100%;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .articles_content {
                width: 100%;
                height: 100%;
                overflow-y: auto;
            }
            .articles_back {
                position: absolute;
                right: 10px;
                bottom: 10px;

                width: 40px;
                height: 33px;

                background-image: url(static/img/back.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                z-index: 1;
            }
            .article_item {
                position: relative;
            }
            .article_item_overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 20%;
                background-color: rgba(0,0,0,0.3);
            }
            .article_item_title {
                color: white;
                font-size: 20px;
            }
            .article_item_subtitle {
                color: white;
                font-size: 12px;
            }
            .article_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .article_hide {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 100%;
                right: -100%;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .article_back {
                position: absolute;
                right: 10px;
                bottom: 10px;

                width: 40px;
                height: 33px;

                background-image: url(static/img/back.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                z-index: 1;
            }
            .article_image img{
                object-fit: cover;
            }
            .content_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
            }
            .content_hide {
                position: absolute;
                top: 100%;
                bottom: -100%;
                left: 0;
                right: 0;
            }
            .detail {
                position: absolute;
                padding: 10px;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: white;
            }
            .detail_title {
                font-size: 24px;
            }
            .detail_subtitle {
                font-size: 10px;
            }
            .detail_description {
                font-size: 18px;
            }
            .chat_show {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .chat_hide {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 100%;
                right: -100%;
                z-index: 1020;
                -webkit-transition: left 0.3s, right 0.3s;
                transition: left 0.3s, right 0.3s;
                -webkit-transition-timing-function: ease;
                transition-timing-function: ease;
            }
            .chat_back {
                position: absolute;
                right: 10px;
                bottom: 10px;

                width: 40px;
                height: 33px;

                background-image: url(static/img/back.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;

                z-index: 1;
            }
        </style>
    </head>
    <body>
        <amp-img
            class="start_normal"
            [class]="[start_img_class]"
            src="static/img/start.png"
            width="300"
            height="80"
            layout="fixed"
            role="button"
            tabindex="0"
            on="
                tap:
                    AMP.setState(
                        {
                            start_img_class:'start_end',

                            currentStepIndex:0,
                            currentPhotoIndex:0,
                            
                            uparrow_div_class:'uparrow_hidden',
                            downarrow_div_class:'downarrow_hidden',
                            prevarrow_div_class:'prevarrow_hidden',
                            nextarrow_div_class:'nextarrow_normal',
                            
                            gallery_div_class:'gallery_hide',
                            photo1_div_class:'photo_show',
                            photo2_div_class:'photo_hide',
                            photo3_div_class:'photo_hide',

                            articles_div_class:'articles_hide',

                            article_div_class:'article_hide',

                            chat_div_class:'chat_hide',

                            downarrow_photo_state:1
                        }
                    ),
                    main-lightbox
                "
        >
        </amp-img>
        
        <amp-lightbox
            id="main-lightbox"
            class="main_show"
            layout="nodisplay">
            <div>
                <div
                    align="center"
                    class="topbar_show">
                    <div
                        align="center"
                        class="left_panel">
                        <amp-img
                            class="logo"
                            src="static/img/logo.png"
                            width="103"
                            height="24"
                            layout="fixed">
                        </amp-img>
                    </div>
                    <div
                        align="center"
                        class="center_panel">
                        <a
                            class="learn_more">
                            Learn more
                        </a>
                    </div>
                    <div
                        align="center"
                        class="right_panel">
                        <amp-img
                            class="chat"
                            src="static/img/chat.png"
                            width="22"
                            height="22"
                            layout="fixed"
                            on="
                                tap:
                                    AMP.setState(
                                        {
                                            chat_div_class:'chat_show',

                                            prevarrow_div_class:'prevarrow_hidden',
                                            nextarrow_div_class:'nextarrow_hidden',
                                            uparrow_div_class:'uparrow_hidden',
                                            downarrow_div_class:'downarrow_hidden'
                                        }
                                    )
                            "
                        >
                        </amp-img>
                        <amp-img
                            class="heart"
                            src="static/img/heart.png"
                            width="22"
                            height="22"
                            layout="fixed">
                        </amp-img>
                        <amp-img
                            class="share"
                            src="static/img/share.png"
                            width="22"
                            height="22"
                            layout="fixed">
                        </amp-img>
                    </div>
                </div>
                <div
                    id="uparrow-div"
                    class="uparrow_hidden"
                    [class]="[uparrow_div_class]"
                    role="button"
                    tabindex="0"
                    on="
                        tap:
                            AMP.setState(
                                {
                                    uparrow_div_class:currentPhotoIndex>1?'uparrow_normal':'uparrow_hidden',
                                    downarrow_div_class:'downarrow_normal',

                                    uparrow_photo_state:currentPhotoIndex>1,
                                    downarrow_photo_state:1,

                                    photo2_div_class:currentPhotoIndex==1?'photo_hide':photo2_div_class,
                                    photo3_div_class:currentPhotoIndex==2?'photo_hide':photo3_div_class,

                                    currentPhotoIndex:currentPhotoIndex-1
                                }
                            )
                        "
                >
                </div>
                <div
                    id="downarrow-div"
                    class="downarrow_hidden"
                    [class]=[downarrow_div_class]
                    role="button"
                    tabindex="0"
                    on="
                        tap:
                            AMP.setState(
                                {
                                    uparrow_div_class:'uparrow_normal',
                                    downarrow_div_class:!currentPhotoIndex?'downarrow_normal':'downarrow_hidden',

                                    uparrow_photo_state:1,
                                    downarrow_photo_state:!currentPhotoIndex,

                                    photo2_div_class:currentPhotoIndex==0?'photo_show':photo2_div_class,
                                    photo3_div_class:currentPhotoIndex==1?'photo_show':photo3_div_class,

                                    currentPhotoIndex:currentPhotoIndex+1
                                }
                            )
                        "
                >
                </div>
                <div
                    id="prevarrow-div"
                    class="prevarrow_hidden"
                    [class]=[prevarrow_div_class]
                    role="button"
                    tabindex="0"
                    on="
                        tap:
                            AMP.setState(
                                {
                                    prevarrow_div_class:'prevarrow_hidden',
                                    nextarrow_div_class:'nextarrow_normal',
                                    uparrow_div_class:'uparrow_hidden',
                                    downarrow_div_class:'downarrow_hidden',

                                    gallery_div_class:'gallery_hide',

                                    currentStepIndex:0
                                }
                            )
                        "
                >
                </div>
                <div
                    id="nextarrow-div"
                    class="nextarrow_normal"
                    [class]=[nextarrow_div_class]
                    role="button"
                    tabindex="0"
                    on="tap:
                            AMP.setState(
                                {
                                    prevarrow_div_class:currentStepIndex?'prevarrow_hidden':'prevarrow_normal',
                                    nextarrow_div_class:currentStepIndex?'nextarrow_hidden':'nextarrow_normal',
                                    uparrow_div_class:(!currentStepIndex&&uparrow_photo_state)?'uparrow_normal':'uparrow_hidden',
                                    downarrow_div_class:(!currentStepIndex&&downarrow_photo_state)?'downarrow_normal':'downarrow_hidden',

                                    gallery_div_class:!currentStepIndex?'gallery_show':gallery_div_class,
                                    articles_div_class:currentStepIndex?'articles_show':articles_div_class,

                                    currentStepIndex:currentStepIndex+1
                                }
                            )
                        "
                >
                </div>
                <div
                    [class]="[video_div_class]">
                    <amp-video
                        id="intro_video"
                        layout="fill"
                        src="https://storage.googleapis.com/ampconf-76504.appspot.com/Bullfinch%20-%202797.mp4">
                    </amp-video>
                    <div
                        id="video_overlay"
                        class="click-to-play-overlay">
                        <div
                            class="play-icon"
                            role="button"
                            tabindex="0"
                            on="
                                tap:
                                    video_overlay.hide,
                                    intro_video.play
                                "
                        >
                        </div>
                        <div>
                            <amp-img
                                class="poster-image"
                                layout="fill"
                                src="static/img/video_poster.png">
                            </amp-img>
                        </div>
                    </div>
                </div>
                <div
                    [class]="[gallery_div_class]">
                    <div
                        [class]="[photo1_div_class]">
                        <amp-img
                            id="slide-image"
                            src="static/img/gallery_photo-1.png"
                            layout="fill">
                        </amp-img>
                    </div>
                    <div
                        [class]="[photo2_div_class]">
                        <amp-img
                            id="slide-image"
                            src="static/img/gallery_photo-2.png"
                            layout="fill">
                        </amp-img>
                    </div>
                    <div
                        [class]="[photo3_div_class]">
                        <amp-img
                            id="slide-image"
                            src="static/img/gallery_photo-3.png"
                            layout="fill">
                        </amp-img>
                    </div>
                </div>
                <div
                    [class]="[articles_div_class]">
                    <div class="articles_content">
                        <div
                            class="articles_back"
                            role="button"
                            tabindex="0"
                            on="
                                tap:
                                    AMP.setState(
                                        {
                                            articles_div_class:'articles_hide',

                                            prevarrow_div_class:'prevarrow_normal',
                                            nextarrow_div_class:'nextarrow_normal',

                                            uparrow_div_class:uparrow_photo_state?'uparrow_normal':'uparrow_hidden',
                                            downarrow_div_class:downarrow_photo_state?'downarrow_normal':'downarrow_hidden',

                                            currentStepIndex:currentStepIndex-1
                                        }
                                    )
                                "
                        >
                        </div>
                        <div
                            class="article_item"
                            on="
                                tap:
                                    AMP.setState(
                                        {
                                            article_div_class:'article_show',
                                            article1_div_class:'content_show',
                                            article2_div_class:'content_hide',
                                            article3_div_class:'content_hide'
                                        }
                                    )
                            "
                        >
                            <amp-img
                                class="article_image"
                                src="static/img/article_photo-1.png"
                                height="220"
                                layout="fixed-height">
                            </amp-img>
                            <div
                                class="article_item_overlay">
                                <p
                                    class="article_item_title">
                                    Caribbean dreams in Grand Cayman
                                </p>
                                <p
                                    class="article_item_subtitle">
                                    Where life come to dream.
                                </p>
                            </div>
                        </div>
                        <div
                            class="article_item"
                            on="
                                tap:
                                    AMP.setState(
                                        {
                                            article_div_class:'article_show',
                                            article1_div_class:'content_hide',
                                            article2_div_class:'content_show',
                                            article3_div_class:'content_hide'
                                        }
                                    )
                            "
                        >
                            <amp-img
                                class="article_image"
                                src="static/img/article_photo-2.png"
                                height="220"
                                layout="fixed-height">
                            </amp-img>
                            <div
                                class="article_item_overlay">
                                <p
                                    class="article_item_title">
                                    Caribbean dreams in Costa Rica
                                </p>
                                <p
                                    class="article_item_subtitle">
                                    Your vacation. Your way.
                                </p>
                            </div>
                        </div>
                        <div
                            class="article_item"
                            on="
                                tap:
                                    AMP.setState(
                                        {
                                            article_div_class:'article_show',
                                            article1_div_class:'content_hide',
                                            article2_div_class:'content_hide',
                                            article3_div_class:'content_show'
                                        }
                                    )
                            "
                        >
                            <amp-img
                                class="article_image"
                                src="static/img/article_photo-3.png"
                                height="220"
                                layout="fixed-height">
                            </amp-img>
                            <div
                                class="article_item_overlay">
                                <p
                                    class="article_item_title">
                                    Caribbean dreams in St. Martin
                                </p>
                                <p
                                    class="article_item_subtitle">
                                    A stroll. A beach. Another perfect day.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    [class]="[article_div_class]">
                    <div
                        class="article_back"
                        role="button"
                        tabindex="0"
                        on="
                            tap:
                                AMP.setState(
                                    {
                                        article_div_class:'article_hide',

                                        prevarrow_div_class:'prevarrow_hidden',
                                        nextarrow_div_class:'nextarrow_hidden',

                                        uparrow_div_class:'uparrow_hidden',
                                        downarrow_div_class:'downarrow_hidden',
                                    }
                                )
                            "
                    >
                    </div>
                    <div
                        [class]="[article1_div_class]">
                        <amp-img
                            id="slide-image"
                            src="static/img/article_photo-1.png"
                            layout="fill">
                        </amp-img>
                        <div
                            class="detail">
                            <p class="detail_title">
                                Caribbean dreams in Grand Cayman
                            </p>
                            <p class="detail_subtitle">
                                Where life come to dream.
                            </p>
                            <p class="detail_description">
                                Total relaxtions. Exhilarating adventure. Freedom just to be, in a place where being rewards all the senses. From unspoiled natural beauty to unparalled luxury. Grans Cayman dazzles at every turn.
                            </p>
                        </div>
                    </div>
                    <div
                        [class]="[article2_div_class]">
                        <amp-img
                            id="slide-image"
                            src="static/img/article_photo-2.png"
                            layout="fill">
                        </amp-img>
                        <div
                            class="detail">
                            <p class="detail_title">
                                Caribbean dreams in Costa Rica
                            </p>
                            <p class="detail_subtitle">
                                Your vacation. Your way.
                            </p>
                            <p class="detail_description">
                                A delightful mix of Old World charm, history and culture are the perfect complement to Costa Rica's natural beauty. San Jose welcomes you to Costa Rica.
                            </p>
                        </div>
                    </div>
                    <div
                        [class]="[article3_div_class]">
                        <amp-img
                            id="slide-image"
                            src="static/img/article_photo-3.png"
                            layout="fill">
                        </amp-img>
                        <div
                            class="detail">
                            <p class="detail_title">
                                Caribbean dreams in St. Martin
                            </p>
                            <p class="detail_subtitle">
                                A stroll. A beach. Another perfect day.
                            </p>
                            <p class="detail_description">
                                Part French, part Dutch, and all paradise. A gateway with a true international flavour - in an idyllic Caribbean setting where each moment defines its own unique perfection.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    [class]="[chat_div_class]">
                    <div
                        class="chat_back"
                        role="button"
                        tabindex="0"
                        on="
                            tap:
                                AMP.setState(
                                    {
                                        chat_div_class:'chat_hide',

                                        prevarrow_div_class:(currentStepIndex>0&&currentStepIndex<3)?'prevarrow_normal':'prevarrow_hidden',
                                        nextarrow_div_class:currentStepIndex<2?'nextarrow_normal':'nextarrow_hidden',
                                        uparrow_div_class:(currentStepIndex==1&&uparrow_photo_state)?'uparrow_normal':'uparrow_hidden',
                                        downarrow_div_class:(currentStepIndex==1&&downarrow_photo_state)?'downarrow_normal':'downarrow_hidden'
                                    }
                                )
                            "
                    >
                    </div>
                    <amp-iframe
                        layout="fill"
                        sandbox="allow-scripts allow-same-origin"
                        frameborder="0"
                        src="https://chat-interface.herokuapp.com/?theme=bridgestone&channelID=76a21dc9-256e-4bc7-a911-1906360178df&text=start_contobox_new&theme_ext=https://cbmedia3.s3.amazonaws.com/cbox_themes_v3/bridgestone_chatbot_q2_2017/styles/expansion/com-htmlbox-mobile.css">
                        <amp-img layout="fill" src="static/img/video_poster.png" placeholder></amp-img>
                    </amp-iframe>
                </div>
            </div>
        </amp-lightbox>
    </body>
</html>