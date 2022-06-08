<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset("css/style.css")}}>

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href="{{asset("img/favicon.png")}}">
</head>
<body>
<header>
    <div class="container">
        <div class="header">
            <div class="higherHeader">
                @if(!Auth::guest())
                    <a href="/logout/en" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Logout</a>
                @else
                    <a href="/login/en" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Log in</a>
                    <a href="/registration/en" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Register</a>
                @endif
                <a href="{{url('/')}}" class="languageHeader"><span class="textLanguageHeader">Language</span><img src="{{asset("img/UK_flag.png")}}" alt="flag" class="flag"></a>
            </div>
            <div class="lowHeader">
                <img src="/img/Logo.png" alt="logo" class="logoImg">
                <button class="btnLowHeader firstBtn" onclick="window.location='{{url('/en')}}'">Main Page</button>
                <button class="btnLowHeader" onclick="window.location='{{url('/services/en')}}'">Services</button>
                <button class="btnLowHeader lastBtn" onclick="window.location='{{url('/aboutUs/en')}}'">About Us</button>
            </div>
        </div>
    </div>

@yield('content')
    <div class="media" style="margin-top: -150px;">
        <a href="https://www.youtube.com/"><img src="{{asset("img/youtubeImg.png")}}" alt="youtube" class="mediaImg"></a> <br>
        <a href="https://instagram.com/"><img src="{{asset("img/instagramImg.jpg")}}" alt="inst" class="mediaImg"></a> <br>
        <a href="https://web.telegram.org/"><img src="{{asset("img/telegramIng.png")}}" alt="tel" class="mediaImg"></a> <br>
        <a href={{url('/comments/en')}}><img src="{{asset("img/comments.jpg")}}" alt="ask a mail" class="mediaImg"></a> <br>
        <a href={{url('/email/en')}}><img src="{{asset("img/gmail.png")}}" alt="ask a mail" class="mediaImg"></a> <br>
        <abbr title="Copy phone" onclick="copyPhone()"><img src="{{asset("img/phone.png")}}" alt="phone" class="mediaImg"></abbr>
        <script>
            function copyPhone() {
                var copyText = '+380-67-111-11-11';
                navigator.clipboard.writeText(copyText).then(() => {
                    alert("You copied the phone");
                });
            }
        </script>
    </div>

    <footer>
        <div class="container">
            <div class="higherFotter">
                <h1 class="titleFooter">Ready to join?</h1>
                <hr class="lineBellowTitleFotter">
                <div class="footerAllItems">
                    <div class="footerItems">
                        <img src="{{asset("img/location.svg")}}" class="footerImg">
                        <p class="footerText">Are waiting for you<br>
                            Kyiv, street, №26</p>
                    </div>
                    <div class="footerItems">
                        <img src="{{asset("img/time.svg")}}" class="footerImg">
                        <p class="footerText">We work from  <br>
                            8 am to 8 pm</p>
                    </div>
                    <div class="footerItems">
                        <img src="{{asset("img/mail.svg")}}" class="footerImg">
                        <p class="footerText">Email<br>
                            example@gmail.com</p>
                    </div>
                    <div class="footerItems">
                        <img src="{{asset("img/phone.svg")}}" class="footerImg">
                        <p class="footerText">Call<br>
                            +380-67-111-11-11</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
