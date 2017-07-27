<!doctype html>
<html ⚡>
    <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <title>Proof of Concept</title>
        <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
        <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
        <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
        <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
        <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
        <link rel="canonical" href="https://ampbyexample.com/components/amp-lightbox/">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            amp-img.start_normal {
                position: absolute;
                top: 8px;
                right: 8px;
                outline: none;
            }
            amp-img.start_end {
                position: absolute;
                top: -100px;
                right: 8px;
                opacity: 0;
                animation-name: start-fadeout;
                animation-duration: 2s;
                outline: none;
            }
            amp-img.skip {
                z-index: 1;
                position: absolute;
                top: 15px;
                right: 12px;
                outline: none;
            }
            amp-img.back_image {
                position: absolute;
                bottom: 20px;
                right: 20px;
                outline: none;
                z-index: 2;
            }
            amp-img.chat_image {
                position: absolute;
                top: 20px;
                right: 20px;
                outline: none;
            }
            amp-lightbox.intro_overall {
                opacity: 0;
                z-index: -1;
                animation-name: intro-fadeinout;
                animation-duration: 10s;
            }
            amp-lightbox.intro_skip_end {
                opacity: 0;
                z-index: -1;
                animation-name: intro_skip-fadeout;
                animation-duration: 1s;
            }
            amp-lightbox.main_start {
                opacity: 1;
                animation-name: main-fadein;
                animation-duration: 10s;
            }
            amp-lightbox.main_normal {
                opacity: 1;
                z-index: 1000;
            }
            amp-lightbox.main_slideup {
                z-index: 998;
                animation-name: main-slideup;
                animation-duration: 0.5s;
            }
            amp-lightbox.main_slidedown {
                z-index: 1000;
                animation-name: main-slidedown;
                animation-duration: 0.5s;
            }
            amp-lightbox.detail_start {
                opacity: 1;
                z-index: 999;
                animation-name: detail-fadein;
                animation-duration: 10s;
            }
            amp-lightbox.detail_normal {
                opacity: 1;
                z-index: 999;
            }
            amp-lightbox.chat_start {
                opacity: 1;
                z-index: 997;
                animation-name: chat-fadein;
                animation-duration: 10s;
            }
            amp-lightbox.chat_normal {
                opacity: 1;
                z-index: 997;
            }
            amp-lightbox.chat_slideleft {
                z-index: 1001;
                animation-name: chat-slideleft;
                animation-duration: 0.5s;
            }
            amp-lightbox.chat_slideright {
                z-index: 997;
                animation-name: chat-slideright;
                animation-duration: 0.5s;
            }
            div.video_lightbox_content {
                background: rgba(0,0,0,0.8);
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            div.carousel_lightbox_content {
                background: rgba(0,0,0,0.8);
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            div.detail_lightbox_content {
                background: rgba(200,255,200,1);
                width: 100%;
                height: 100%;
            }
            div.chat_lightbox_content {
                background: rgba(200,255,200,1);
                width: 100%;
                height: 100%;
            }
            div.detail-content {
                overflow-y: auto;
                height: 100%;
                width: 100%;
            }
            #intro_video video {
                width: auto;
                height: auto;
                left: 50%;
                transform: translateX(-50%);
            }
            #slide_image img {
                width: auto;
                height: auto;
                left: 50%;
                transform: translateX(-50%);
            }
            .photo img {
                object-fit: cover;
            }
            p.main-title {
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 30px;
                background-color: rgba(0,0,0,0.8);
                color: white;
                font-size: 36px;
                outline: none;
            }
            p.detail-title {
                margin-left: 12px;
                margin-right: 12px;
                font-size: 32px;
                text-align: center;
            }
            p.detail-description {
                margin-left: 12px;
                margin-right: 12px;
                font-size: 20px;
            }
            @keyframes start-fadeout {
                from {
                    top: 8px;
                    opacity: 1;
                }
                to {
                    top: -100px;
                    opacity: 0;
                }
            }
            @keyframes intro-fadeinout {
                0% {
                    opacity: 0;
                    z-index: 1002;
                }
                10% {
                    opacity: 1;
                    z-index: 1002;
                }
                90% {
                    opacity: 1;
                    z-index: 1002;
                }
                99% {
                    opacity: 0;
                    z-index: 1002;
                }
                100% {
                    opacity: 0;
                    z-index: -1;
                }
            }
            @keyframes main-fadein {
                0% {
                    opacity: 0;
                }
                50% {
                    opacity: 0;
                }
                60% {
                    opacity: 1;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes detail-fadein {
                0% {
                    opacity: 0;
                }
                60% {
                    opacity: 0;
                }
                70% {
                    opacity: 1;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes chat-fadein {
                0% {
                    opacity: 0;
                }
                70% {
                    opacity: 0;
                }
                80% {
                    opacity: 1;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes intro_skip-fadeout {
                0% {
                    opacity: 1;
                    z-index: 1001;
                }
                99% {
                    opacity: 0;
                    z-index: 1001;
                }
                100% {
                    opacity: 0;
                    z-index: -1;
                }
            }
            @keyframes main-slideup {
                0% {
                    top: 0;
                    bottom: 0;
                    z-index: 1000;
                }
                99% {
                    top: -100%;
                    bottom: 100%;
                    z-index: 1000;
                }
                100% {
                    top: -100%;
                    bottom: 100%;
                    z-index: 998;
                }
            }
            @keyframes main-slidedown {
                0% {
                    top: -100%;
                    bottom: 100%;
                    z-index: 1000;
                }
                100% {
                    top: 0;
                    bottom: 0;
                    z-index: 1000;
                }
            }
            @keyframes chat-slideleft {
                0% {
                    left: 100%;
                    right: -100%;
                    z-index: 1001;
                }
                100% {
                    left: 0;
                    right: 0;
                    z-index: 1001;
                }
            }
            @keyframes chat-slideright {
                0% {
                    left: 0;
                    right: 0;
                    z-index: 1001;
                }
                99% {
                    left: 100%;
                    right: -100%;
                    z-index: 1001;
                }
                100% {
                    left: 100%;
                    right: -100%;
                    z-index: 997;
                }
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
            on="tap:AMP.setState({start_img_class:'start_end', intro_lightbox_class:'intro_overall', main_lightbox_class:'main_start', detail_lightbox_class:'detail_start', chat_lightbox_class:'chat_start'}), video-lightbox, main-lightbox, detail-lightbox, chat-lightbox, intro_video.play">
        </amp-img>
        <amp-lightbox
            id="video-lightbox"
            [class]="[intro_lightbox_class]"
            layout="nodisplay">
            <amp-img
                class="skip"
                src="static/img/skip.png"
                width="50"
                height="21"
                layout="fixed"
                role="button"
            	tabindex="0"
                on="tap:AMP.setState({intro_lightbox_class:'intro_skip_end', main_lightbox_class:'main_normal', detail_lightbox_class:'detail_normal', chat_lightbox_class:'chat_normal'})">
            </amp-img>
            <div class="video_lightbox_content">
                <amp-video autoplay
                    id="intro_video"
                    layout="fill">
                    <source src="https://storage.googleapis.com/ampconf-76504.appspot.com/Bullfinch%20-%202797.mp4"
                        type="video/mp4" />
                </amp-video>
            </div>
        </amp-lightbox>
        <amp-lightbox
            id="main-lightbox"
            [class]="[main_lightbox_class]"
            layout="nodisplay">
            <div class="carousel_lightbox_content">
                <amp-carousel
                    layout="fill"
                    type="slides"
                    [slide]="selectedSlide"
                    on="slideChange:AMP.setState({selectedSlide: event.index})">
                    <div>
                        <amp-img
                            id="slide_image"
                            src="https://unsplash.it/1400/600?image=401"
                            layout="fill">
                        </amp-img>
                        <p
                            class="main-title"
                            role="button"
                            on="tap:AMP.setState({main_lightbox_class:'main_slideup'})">
                            PODCAST: This Is Why Computer Science Rocks
                        </p>
                    </div>
                    <div>
                        <amp-img
                            id="slide_image"
                            src="https://unsplash.it/1400/600?image=114"
                            layout="fill">
                        </amp-img>
                        <p
                            class="main-title"
                            role="button"
                            on="tap:AMP.setState({main_lightbox_class:'main_slideup'})">
                            How BallotReady Helps Students Tackle The Entire Ballot
                        </p>
                    </div>
                    <div>
                        <amp-img
                            id="slide_image"
                            src="https://unsplash.it/1400/600?image=622"
                            layout="fill">
                        </amp-img>
                        <p
                            class="main-title"
                            role="button"
                            on="tap:AMP.setState({main_lightbox_class:'main_slideup'})">
                            The Cost-Effective Power Of Psychological Nudges
                        </p>
                    </div>
                    <div>
                        <amp-img
                            id="slide_image"
                            src="https://unsplash.it/1400/600?image=315"
                            layout="fill">
                        </amp-img>
                        <p
                            class="main-title"
                            role="button"
                            on="tap:AMP.setState({main_lightbox_class:'main_slideup'})">
                            Why Is My Manager Suddenly Hostile Toward Me? Here's Why
                        </p>
                    </div>
                </amp-carousel>
                <amp-img
                    class="chat_image"
                    src="static/img/chat.png"
                    width="50"
                    height="50"
                    layout="fixed"
                    role="button"
                    on="tap:AMP.setState({chat_lightbox_class:'chat_slideleft'})">
                </amp-img>
            </div>
        </amp-lightbox>
        <amp-lightbox
            id="detail-lightbox"
            [class]="[detail_lightbox_class]"
            layout="nodisplay">
            <div class="detail_lightbox_content">
                <amp-carousel
                    layout="fill"
                    type="slides"
                    [slide]="selectedSlide"
                    on="slideChange:AMP.setState({selectedSlide: event.index})">
                    <div>
                        <div class="detail-content">
                            <p class="detail-title">
                                PODCAST: This Is Why Computer Science Rocks
                            </p>
                            <amp-img
                                class="photo"
                                src="https://unsplash.it/1400/600?image=401"
                                width="200"
                                height="100"
                                layout="responsive">
                            </amp-img>
                            <p class="detail-description">
                                Can machine learning help you master new languages (including High Valyrian)? And can algorithms assist in making some seriously awesome music? You bet—and Burr Settles is here to share how. Settles leads the research group at the massively popular education app Duolingo and runs February Album Writing Month, a global annual songwriting experiment. He also plays guitar in the Pittsburgh pop band delicious pastries, and you'll get to hear some of their sonic magic in the episode.
                            </p>
                            <p class="detail-description">
                                Tune in for career-changing advice, a dynamic and highly accessible breakdown of machine learning, and research-backed collaboration tips like this one:
                            </p>
                            <p class="detail-description">
                                Let’s say you’ve got a jazz pianist from Seattle who works on a new song with a thrash-metal guitarist from the Netherlands… It turns out they’re more likely to be satisfied with the results of their collaboration than say, two folk singers. It’s not just a shared interest, but the fact that they have different skills and backgrounds, that makes for a successful collaboration.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="detail-content">
                            <p class="detail-title">
                                How BallotReady Helps Students Tackle The Entire Ballot
                            </p>
                            <amp-img
                                class="photo"
                                src="https://unsplash.it/1400/600?image=114"
                                width="200"
                                height="100"
                                layout="responsive">
                            </amp-img>
                            <p class="detail-description">
                                I still remember the first time I cast a vote. I was eighteen and I had just started college, halfway across the country. Like moving into a dorm or buying extra long twin sheets, Election Day felt like an early test of adulthood.
                            </p>
                            <p class="detail-description">
                                I entered the voting booth and began confidently voting—for president, senator, congressman, state representative. But then my heart sank. The races just kept going. Somehow, in between freshman seminars on Plato and calculus, no one had thought to mention that the ballot would be 101 races and measures long.
                            </p>
                            <p class="detail-description">
                                And so I did what I later learned many people do—I guessed, left blanks, and headed home feeling like I’d blown my first test as a citizen.
                            </p>
                            <p class="detail-description">
                                Casting an informed vote on the entire ballot can be difficult for even the most sophisticated of voters—in Chicago last year, my ballot included 72 different judges! But it can be particularly challenging for college students and first-time voters who are often caught off-guard, like me, by the length of the ballot.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="detail-content">
                            <p class="detail-title">
                                The Cost-Effective Power Of Psychological Nudges
                            </p>
                            <amp-img
                                class="photo"
                                src="https://unsplash.it/1400/600?image=622"
                                width="200"
                                height="100"
                                layout="responsive">
                            </amp-img>
                            <p class="detail-description">
                                Most governments aren’t subtle when they want citizens to do something. The United States spends close to $1 billion annually on advertising—trying to convince citizens to do everything from taking flu prevention shots to reporting unattended suitcases at the airport. But now agencies are finding that subtle “nudges” can motivate behavior much better than ads, fines, or deadlines.
                            </p>
                            <p class="detail-description">
                                Nudges, or small changes to the context in which decisions are made, are the subject of a new analysis by Harvard Business School Associate Professor John Beshears and colleagues, recently published in the journal Psychological Science. The paper, Should Governments Invest More in Nudges? answers its own question with a resounding “Yes.”
                            </p>
                            <p class="detail-description">
                                “We suspected that nudges on an impact-per-cost basis would be superior to traditional approaches such as a financial incentive or an educational campaign,” says Beshears. “But we were surprised to see the extent to which it is true.”
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="detail-content">
                            <p class="detail-title">
                                Why Is My Manager Suddenly Hostile Toward Me? Here's Why
                            </p>
                            <amp-img
                                class="photo"
                                src="https://unsplash.it/1400/600?image=315"
                                width="200"
                                height="100"
                                layout="responsive">
                            </amp-img>
                            <p class="detail-description">
                                Dear Liz,
                            </p>
                            <p class="detail-description">
                                I had my one-year anniversary at work in March.
                            </p>
                            <p class="detail-description">
                                My manager "Chris" and I had a two-hour lunch to talk about my first year results.
                            </p>
                            <p class="detail-description">
                                Chris was very complementary and told me that hiring me was one of the best decisions he's ever made.
                            </p>
                            <p class="detail-description">
                                After that lunch, Chris sent me a long email message telling me how pleased he was with my first year's performance.
                            </p>
                        </div>
                    </div>
                </amp-carousel>
                <amp-img
                    class="back_image"
                    src="static/img/back.png"
                    width="50"
                    height="50"
                    layout="fixed"
                    role="button"
                    on="tap:AMP.setState({main_lightbox_class:'main_slidedown'})">
                </amp-img>
            </div>
        </amp-lightbox>
        <amp-lightbox
            id="chat-lightbox"
            [class]="[chat_lightbox_class]"
            layout="nodisplay">
            <div class="chat_lightbox_content">
                <amp-iframe
                    layout="fill"
                    sandbox="allow-scripts allow-same-origin"
                    frameborder="0"
                    src="https://chat-interface.herokuapp.com/?theme=bridgestone&channelID=76a21dc9-256e-4bc7-a911-1906360178df&text=start_contobox_new&theme_ext=https://cbmedia3.s3.amazonaws.com/cbox_themes_v3/bridgestone_chatbot_q2_2017/styles/expansion/com-htmlbox-mobile.css">
                    <amp-img layout="fill" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" placeholder></amp-img>
                </amp-iframe>
                <amp-img
                    class="back_image"
                    src="static/img/back.png"
                    width="50"
                    height="50"
                    layout="fixed"
                    role="button"
                    on="tap:AMP.setState({chat_lightbox_class:'chat_slideright'})">
                </amp-img>
            </div>
        </amp-lightbox>
    </body>
</html>