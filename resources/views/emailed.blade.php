@extends('layout')

@section('content')

<div class="media">
    <a href="https://www.youtube.com/"><img src="/img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
    <a href="https://instagram.com/"><img src="/img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
    <a href="https://web.telegram.org/"><img src="/img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
    <a href="/comments"><img src="/img/comments.jpg" alt="ask a mail" class="mediaImg"></a> <br>
    <a href="/email"><img src="/img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
    <abbr title="Копіювати телефон" onclick="copyPhone()"><img src="/img/phone.png" alt="phone" class="mediaImg"></abbr>
    <script>
        function copyPhone() {
            var copyText = '+380-67-111-11-11';
            navigator.clipboard.writeText(copyText).then(() => {
                alert("Ви скопювали номер телефону");
            });
        }
    </script>
</div>


<h2 style="margin-top: 300px">
    @php
    echo( 'Дякуємо за коментар, ' . $name . '!' );
    @endphp
    </h2>

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
