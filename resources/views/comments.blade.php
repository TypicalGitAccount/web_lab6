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

<h1 style="margin-top:200px;">Коментарі:</h1>
<h2 style="margin-top:10px;">
    <?php
        foreach ($comments as $comment) {
        ?>
        <br>
        <?php
        echo( $comment);
        }
        ?>
    </h2>

</body>
@endsection
</html>

