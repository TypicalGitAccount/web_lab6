@extends('layoutEn')

@section('content')

    <div class="media"">
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
                        <img src="/img/bestService.png" alt="map" class="aboutImg">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection
</html>
