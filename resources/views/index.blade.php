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
    <main>
        <div class="container">

            <div class="textMain">
                <h1 class="titleMain">Навчаємо іноземним мовам правильно!</h1>
                <p lang="ukr" class="fullTextMain">
                    І ми серйозно. Наша ціль - нація що розмовляє різними мовами і має різноманітні <br> культурні та соціальні зв’язки. Ви запитаєте, як усе працює? Просто.
                    <br> В нашій команді професійні та досвідчені викладачі, що допомагають на кожному <br> етапі навчання. Ми проводимо мовні клуби за участі іноземців. Таким чином <br> створюється середовище, у якому помилки виправляються носіями мови.
                </p>

                <img src="/img/mainImg.png" alt="mainImg" class="mainImg">

                <p class="fullTextMain">
                    Ми також контролюємо прогрес на кожному етапі навчання. <br>
                    Але не думайте, що увесь час будете завалені вправами! У нашому офісі завжди є місце <br>
                    для відпочинку. На вихідних проводимо різноманітні івенти, дивимося фільми, <br>
                    проводимо чаювання на перервах. Уже помічаєте? Нічого складного. Вам потрібно лише <br>
                    відвідати нас і пройти 5 хвилинний тест на рівень знань обраної вами мови. <br>
                    Скоро незчуєтеся, як розмовлятимете вільно!
                </p>
            </div>
        </div>
    </main>

</body>

@endsection
</html>
