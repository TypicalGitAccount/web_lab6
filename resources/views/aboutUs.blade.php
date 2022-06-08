@extends('layout')

@section('content')

    <div class="media">
        <a href="https://www.youtube.com/"><img src="/img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
        <a href="https://instagram.com/"><img src="/img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
        <a href="https://web.telegram.org/"><img src="/img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
        <a href="{{url('/comments')}}"><img src="/img/comments.jpg" alt="ask a mail" class="mediaImg"></a> <br>
        <a href="{{url('/email')}}"><img src="/img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
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
            <div class="allAboutUs">

                <!-- Map -->
                <div class="mapMainBlock">
                    <div class="imgDiv">
                        <img src="/img/map.png" alt="map" class="aboutImg">
                    </div>
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Правильний підхід
                            </span> <br> <br>
                            На наших курсах працюють лише кваліфіковані <br>
                            викладачі, що мають міжнародну <br>
                            сертифікацію та великий практичний досвід. <br>
                            Більшість викладачів - іноземці!
                        </p>
                    </div>
                </div>

                <!-- bestPrice -->
                <div class="mapMainBlock revise">
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Гнучкий графік та приємні ціни
                            </span> <br> <br>
                            Наші клієнти самі обирають викладача після <br>
                            пробних занять, обирають зручний для занять <br>
                            розклад і отримують регулярні знижки! <br>
                            Для дорослих заняття коштуватимуть <br>
                            500 грн/ год, для дітей - 250 грн/год.
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
                                Підтримка на шляху
                            </span> <br> <br>
                            За допомогою п’ятихвилинного тесту  <br>
                            визначимо рівень знань обраної мови,  <br>
                            визначимо вид лексики, який найбільше<br>
                            знадобиться. Регулярно перевірятимемо рівень <br>
                            знань за допомогою інтерактивних тестів.
                        </p>
                    </div>
                </div>

                <!-- bestService -->
                <div class="mapMainBlock revise">
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Усі види послуг
                            </span> <br> <br>
                            Ми готуємо до ЗНО та міжнародних іспитів та  <br>
                            сертифікацій, вчимо говорити іноземною на  <br>
                            практиці для переїзду за кордон, надаємо  <br>
                            безкоштовні консультації з перекладів для клієнтів, <br>
                            виконуємо корпоративні замовлення.
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
