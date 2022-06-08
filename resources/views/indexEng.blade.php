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
    <main>
        <div class="container">
            <div class="textMain">
                <h1 class="titleMain">We teach foreign languages the right way!</h1>
                <p class="fullTextMain">
                    Seriously, we mean it. Our goal is a nation that speaks different languages  <br> and has worldwide cultural connections. You may ask, how does this work? Simple.
                    <br> We have experienced pro-teachers that help you all the way through. <br> We host speaking clubs with foreigners. This way we create an environment, <br> where mistakes are being corrected by native speakers.
                </p>

                <img src="{{asset("img/mainImg.png")}}" alt="mainImg" class="mainImg">

                <p class="fullTextMain">
                    We also keep track of your progress on every step. <br>
                    But there are not always exercises and tests! We have room for some rest too.  <br>
                    On weekends we watch films and having weabrakes. You see?  <br>
                    Nothing complicated. You only need to visit us and take a 5 minute <br>
                    test of chosen language knowledge and soon you will be speaking fluently!
                </p>
            </div>
        </div>
    </main>
</body>
    @endsection
</html>
