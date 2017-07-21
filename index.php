<!DOCTYPE html>
<html>
    <head>
        <title>Proof of concept</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        
        <link rel="stylesheet" type="text/css" href="public/vendor/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="public/vendor/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="public/vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="public/js/index.js"></script>

        <script type="text/javascript" src="public/js/jquery.event.move.js"></script>
        <script type="text/javascript" src="public/js/jquery.event.swipe.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="public/js/scripts.js"></script>
    </head>
    <body>
        <div id="banner">
            <img id="start" src="public/img/start.png"/>
        </div>
        <div id="intro_video">
            <video muted id="bgvid" playsinline>
                <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                <source src="public/vids/river.mp4" type="video/mp4">
                <source src="public/vids/river.ogv" type="video/ogv">
                <source src="public/vids/river.webm" type="video/webm">
            </video>
            <img id="skip" src="public/img/skip.png"/>
        </div>
        <div id="main">
            <div id="preview" class="slider-nav">
                <div>
                    <img src="https://unsplash.it/1400/600?image=622" class="preview-img">
                </div>
                <div>
                    <img src="https://unsplash.it/1400/600?image=114" class="preview-img">
                </div>
                <div>
                    <img src="https://unsplash.it/1400/600?image=315" class="preview-img">
                </div>
                <div>
                    <img src="https://unsplash.it/1400/600?image=622" class="preview-img">
                </div>
                <div>
                    <img src="https://unsplash.it/1400/600?image=401" class="preview-img">
                </div>
            </div>
            <div id="detail" class="slider-for">
                <div>
                    <div class="detail-container">
                        <div class="item-title">
                            <span>How To Hack Someone Off A Segway Scooter In 20 Seconds</span>
                        </div>
                        <img src="https://unsplash.it/1400/600?image=622" class= "item-img"/>
                        <div class="item-description">
                            <p>
                                Any hoverboard rider&nbsp;should be concerned about their physical wellbeing. Thanks to digital weaknesses in Segway's hands-free Ninebot miniPRO scooter, they've got more reason to worry. The&nbsp;flaws made it possible to take almost complete control of the self-balancing vehicle and, potentially, knock off anyone aboard with some fairly basic hacks, researchers said today.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="detail-container">
                        <div class="item-title">
                            <span>The Sad Drowning Of Steve The Robot And The Future Of Robotic Rights</span>
                        </div>
                        <img src="https://unsplash.it/1400/600?image=114" class= "item-img"/>
                        <div class="item-description">
                            <p>
                                On Monday a robotic security guard here in Washington was found <a href="http://www.cnn.com/2017/07/18/us/security-robot-drown-trnd/index.html" target="_blank">drowned</a> in a fountain at his workplace after apparently failing to see a set of stairs leading down to it and falling to his watery demise. In this case, no foul play is suspected and it is believed the Knightscope robot simply failed to see the stairs, but the incident raises fascinating questions about robotic rights and the future of our mechanized overlords.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="detail-container">
                        <div class="item-title">
                            <span>Recruiting Software Firm Lever Raises $30M For Effort To Transform Hiring</span>
                        </div>
                        <img src="https://unsplash.it/1400/600?image=315" class= "item-img"/>
                        <div class="item-description">
                            <p>
                                Sarah Nahm cofounded <a href="https://www.lever.co" target="_blank">Lever </a>five years ago to rethink recruiting for the digital age. The San Francisco-based recruiting software company helps its customers not only track resumes, but also identify and cultivate people who might not be actively job-hunting.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="detail-container">
                        <div class="item-title">
                            <span>The House Budget Panel's Fiscal Plan Could Open The Door To A Big Tax Bill, If It Survives</span>
                        </div>
                        <img src="https://unsplash.it/1400/600?image=622" class= "item-img"/>
                        <div class="item-description">
                            <p>
                                Hours after the collapse of the Senate GOP leadership’s health plan, Republicans began to move on. The House began its efforts to write a tax bill when the Budget Committee released a draft budget resolution. The goal: To make that fiscal plan the vehicle for a major tax measure that could pass Congress with no Democratic votes.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="detail-container">
                        <div class="item-title">
                            <span>Baidu's Apollo Lifts Off: Microsoft Taking Open-Source Robocar Project Global</span>
                        </div>
                        <img src="https://unsplash.it/1400/600?image=401" class= "item-img"/>
                        <div class="item-description">
                            <p> 
                                Fast on the heels of Baidu’s announcement that more than 50 companies have joined its open-source “Project Apollo” initiative to perfect driverless car technology, Microsoft is enlisting&nbsp;to help the&nbsp;China-centric effort&nbsp;expand into the U.S. and Europe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="chat">
            <div id="control-box">
                <div id="chat-title">
                    We can chat here!
                </div>
            </div>
            <div id="widget-box">
            </div>
        </div>
    </body>
</html>
