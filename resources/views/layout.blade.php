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
                    <a href="/logout" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Вийти</a>
                @else
                    <a href="/login" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Увійти</a>
                    <a href="/registration" style="float: right;
                                text-decoration: none;
                                position: relative;
                                margin-top: 12px;
                                margin-right: 3%;
                                color: #fff;
                                font-size: 15px;">Зареєструватися</a>
                @endif

                <a href="/en" class="languageHeader"><span class="textLanguageHeader">Мова</span><img src="/img/Language_flag.svg" alt="flag" class="flag"></a>
            </div>
            <div class="lowHeader">
                <img src="/img/Logo.png" alt="logo" class="logoImg">
                <button class="btnLowHeader firstBtn" onclick="window.location='{{url('/')}}'">Головна</button>
                <button class="btnLowHeader" onclick="window.location='{{url('/services')}}'">Послуги</button>
                <button class="btnLowHeader lastBtn" onclick="window.location='{{url('/aboutUs')}}'">Про нас</button>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="higherFotter">
            <h1 class="titleFooter">Готові приєднатися?</h1>
            <hr class="lineBellowTitleFotter">
            <div class="footerAllItems">
                <div class="footerItems">
                    <img src="/img/location.svg" class="footerImg">
                    <p class="footerText">Чекаємо на вас<br>
                        Місто, вулиця, №26</p>
                </div>
                <div class="footerItems">
                    <img src="/img/time.svg" class="footerImg">
                    <p class="footerText">Працюємо<br>
                        8 ранку - 8 вечора</p>
                </div>
                <div class="footerItems">
                    <img src="/img/mail.svg" class="footerImg">
                    <p class="footerText">Електронна пошта<br>
                        example@gmail.com</p>
                </div>
                <div class="footerItems">
                    <img src="/img/phone.svg" class="footerImg">
                    <p class="footerText">Дзвоніть<br>
                        +380-67-111-11-11</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
