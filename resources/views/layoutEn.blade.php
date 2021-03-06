<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=/css/style.css>
    <link rel="stylesheet" href="css/servicesStyle.css">
    <link rel="stylesheet" href="/css/aboutUsStyle.css">

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href=/img/favicon.png">
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
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="higherFotter">
            <h1 class="titleFooter">Ready to join?</h1>
            <hr class="lineBellowTitleFotter">
            <div class="footerAllItems">
                <div class="footerItems">
                    <img src="{{asset("img/location.svg")}}" class="footerImg">
                    <p class="footerText">Are waiting for you<br>
                        Kyiv, street, ???26</p>
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
