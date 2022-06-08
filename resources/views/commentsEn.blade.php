@extends('layoutEn')

@section('content')

    <div class="media">
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

    <h1 style="margin-top:200px;">Comments:</h1>
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
    </h2>

    </body>
    @endsection
    </html>
