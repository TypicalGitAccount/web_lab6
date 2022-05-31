<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/aboutUsStyle.css">

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
</head>
<body>
    <header>
        <div class="container">
            <div class="lineHeader">
                <div class="higherHeader">
                    @if(!Auth::guest())
                        <a href="/logout" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Logout</a>
                    @else
                        <a href="/login" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Log in</a>
                        <a href="/registration" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Register</a>
                    @endif
                    <a href="{{url('/aboutUs')}}" class="languageHeader"><span class="textLanguageHeader">Language</span><img src="/img/UK_flag.png" alt="flag" class="flag"></a>
                </div>
                <div class="lowHeader">
                    <img src="/img/Logo.png" alt="logo" class="logoImg">
                    <button class="btnLowHeader firstBtn" onclick="window.location='{{url('/en')}}'">Home</button>
                    <button class="btnLowHeader" onclick="window.location='{{url('services/en')}}'">Services</button>
                    <button class="btnLowHeader lastBtn" onclick="window.location='{{url('/aboutUs/en')}}'">About us</button>
                </div>
            </div>
        </div>
    </header>
    <div class="media" style="margin-top:100px;">
        <a href="https://www.youtube.com/"><img src="/img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
        <a href="https://instagram.com/"><img src="/img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
        <a href="https://web.telegram.org/"><img src="/img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
        <a href="{{url('/comments/en')}}"><img src="/img/comments.jpg" alt="ask a mail" class="mediaImg"></a> <br>
        <a href="{{url('/email/en')}}"><img src="/img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
        <abbr title="Copy phone" onclick="copyPhone()"><img src="/img/phone.png" alt="phone" class="mediaImg"></abbr>
        <script>
            function copyPhone() {
              var copyText = '+380-67-111-11-11';
              navigator.clipboard.writeText(copyText).then(() => {
                alert("Ви скопювали номер телефону");
              });
            }
          </script>
    </div>
    <main>
        <div class="container">
            <div class="allAboutUs">

                <!-- Map -->
                <div class="mapMainBlock">
                    <div class="imgDiv">
                        <img src="/img/map.png" alt="map" class="aboutImg">
                    </div>
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                The right way
                            </span> <br> <br>
                            We only have qualified teachers, <br>
                            they have international certification and  <br>
                            large practical expirience. Most of them areforeigners! <br>
                        </p>
                    </div>
                </div>

                <!-- bestPrice -->
                <div class="mapMainBlock revise">
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Flexible schedule and good prices
                            </span> <br> <br>
                            Our customers choose their teachers and schedule<br>
                            after a few test classes. We also offer various<br>
                            discounts! For adults a class will cost<br>
                            500 UAH, for children - 250 UAH.
                        </p>
                    </div>
                    <div class="imgDiv">
                        <img src="/img/bestPrice.png" alt="map" class="aboutImg">
                    </div>
                </div>

                <!-- steps -->
                <div class="mapMainBlock">
                    <div class="imgDiv">
                        <img src="/img/supportSteps.png" alt="map" class="aboutImg">
                    </div>
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Support on the way
                            </span> <br> <br>
                            After a 5 minute test we will discover your knowledge<br>
                            level and determine the vocabulary you need<br>
                            the most. We will also check you progress<br>
                            regularely with interactive tests
                        </p>
                    </div>
                </div>

                <!-- bestService -->
                <div class="mapMainBlock revise">
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                All services available
                            </span> <br> <br>
                            We prepare for the IEE, international exams<br>
                            and certifications, teach foreign languages<br>
                            via practicing to help in relocation, help<br>
                            in translation for our customers for free and we<br>
                            also offer corporative services.
                        </p>
                    </div>
                    <div class="imgDiv">
                        <img src="//img/bestService.png" alt="map" class="aboutImg">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="higherFotter">
                <h1 class="titleFooter">Ready to join?</h1>
                <hr class="lineBellowTitleFotter">
                <div class="footerAllItems">
                    <div class="footerItems">
                        <img src="/img/location.svg" class="footerImg">
                        <p class="footerText">Are waiting for you<br>
                            Kyiv, street, №26</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/time.svg" class="footerImg">
                        <p class="footerText">We work from  <br>
                            8 am to 8 pm</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/mail.svg" class="footerImg">
                        <p class="footerText">Email<br>
                            example@gmail.com</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/phone.svg" class="footerImg">
                        <p class="footerText">Call<br>
                            +380-67-111-11-11</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
