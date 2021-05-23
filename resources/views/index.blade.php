<!DOCTYPE html>
<html>
  <head>
    <title>Sun-Tech сонячні станції для вашого дому</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Helvetica+Neue&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap"
      rel="stylesheet"
    />


    <link rel="stylesheet" href="../css/mysitestyle.css" />
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
 <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="../js/main-calc.css">
    <link rel="stylesheet" href="../css/style-calc.css">
  </head>
  <body>
    <!-- Шапка сайта з меню -->
<div class="header">
<div class="sitelogo">
   <a href="#"><img src="../images/sun-tech-logo-lite.png" alt="Sun-Tech - лідер на ринку сонячних батарей"
            title="На головну" class="imgsitelogo"></a>
  </div>
    <div class="menu" id="myTopnav">
  <ul>

    <li><a href="index.html#systems">Готові системи</a></li>
    <li><a href="tovary.html">Товари</a></li>
    <li><a href="index.html#ourprojects">Проєкти</a></li>
    <li><a href="index.html#aboutcompany">Про компанію</a></li>
    <li><a href="#contacts">Контакти</a></li>
    <li><a href="#cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
</a></li>
  </ul><a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
</div>
</div>
 <!-- Контет сторінки -->
    <div class="body-page">

<!-- Слайд 1 -->
      <div class="slide1site">
        <div class="newPicture">
          <img
            src="../images/plant-inside-light-bulb-butterfly.png"
            width="460"
            height="555"
          />
        </div>
        <div class="newText">
          <h2 class="h2simple">Зелений тариф</h2>
          <h3 class="h3simple">- у кожен дім!</h3>
          <ul class="li-slidetext">
            <li>Сонце - безкоштовне та невичерпне джерело електроенергії</li>
            <li>Енергонезалежність вашого будинка</li>
            <li>
              Компенсація за "зеленим" тарифом за вироблену електроенергію
            </li>
            <li>Довготривалий строк служби фотомодів 25+ років</li>
            <li>
              Мінімальні тимчасові та грошові витрати на технічне обслуговування
            </li>
            <li>Можливість поступового збільшення потужності</li>
            <li>
              Забезпечення свого будинка екологічно-чистою електроенергією
            </li>
            <li>Вклад в енергонезалежність та екологію України.</li>
          </ul>
        </div>
      </div>
<!-- Кінець Слайд 1 -->
<!-- Слайд 2 -->
      <div class="slide2site">
<div><h2 class="h2simple">Зелений тариф</h2></div>
<div>
<!-- вставка калькулятора -->
<p>
    <script src="../js/min.rangeslider.js" type="text/javascript"></script>
    <script src="../js/min.rate.jquery.js" type="text/javascript"></script>
</p>

<div class="container" style="padding: 0;">







    <h1 class="page-header">Калькулятор прибутку від сонячної електростанції</h1>

    <p style="font-size: 14px; padding: 0 0 8px 0 !important;">Дізнайтесь ваш потенційний річний дохід та період окупності сонячної електростанції. Перетягніть повзунки значень згідно ваших потреб, оберіть регіон та період. У правому нижньому кутку з'явиться результат підрахунку.</p>


    <div class="form-group form-group-power">
        <label for="power">Потужність електростанції: </label> <span id="selected-power">12&nbsp;кВт</span>
        <input type="range" id="power" min="1" max="30" step="1" value="10" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">





    </div>

    <div class="form-group form-group-consumption">
        <label for="consumption">Середньомісячне власне споживання: </label> <span id="selected-consumption">170&nbsp;кВт·год</span>
        <input type="range" id="consumption" min="0" max="1000" step="10" value="250" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
    </div>


    <div class="form-group">
        <label for="regions">Регіон:
            <abbr title=" Найнижча сонячна активність у Львівській та Волинській областях, найвища - у Криму та Одеській області. При цьому майже вся територія України підходить для встановлення сонячних електростанцій." rel="tooltip" class="tooltip">?</abbr>
        </label> <span id="selected-region"></span>
        <select name="regions" id="regions" class="form-control"><option value="vinnytsya">Вінницька обл.</option><option value="volyn">Волинська обл.</option><option value="dnipropetrovsk">Дніпропетровська обл.</option><option value="donetsk">Донецька обл.</option><option value="zhytomyr">Житомирська обл.</option><option value="zakarpatska">Закарпатська обл.</option><option value="zaporizhia">Запорізька обл.</option><option value="ivano-frankivsk">Івано-Франківська обл.</option><option value="kyiv" selected="">Київська обл.</option><option value="kirovohrad">Кіровоградська обл.</option><option value="luhansk">Луганська обл.</option><option value="lviv">Львівська обл.</option><option value="mykolaiv">Миколаївська обл.</option><option value="odesa">Одеська обл.</option><option value="poltava">Полтавська обл.</option><option value="rivne">Рівненська обл.</option><option value="sumy">Сумська обл.</option><option value="ternopil">Тернопільска обл.</option><option value="kharkiv">Харківська обл.</option><option value="kherson">Херсонська обл.</option><option value="khmelnytsky">Хмельницька обл.</option><option value="сherkasy">Черкаська обл.</option><option value="chernihiv">Чернігівська обл.</option><option value="chernivetska">Чернівецька обл.</option><option value="crimea">АР Крим</option><option value="vinnytsya">Вінницька обл.</option><option value="volyn">Волинська обл.</option><option value="dnipropetrovsk">Дніпропетровська обл.</option><option value="donetsk">Донецька обл.</option><option value="zhytomyr">Житомирська обл.</option><option value="zakarpatska">Закарпатська обл.</option><option value="zaporizhia">Запорізька обл.</option><option value="ivano-frankivsk">Івано-Франківська обл.</option><option value="kyiv" selected="">Київська обл.</option><option value="kirovohrad">Кіровоградська обл.</option><option value="luhansk">Луганська обл.</option><option value="lviv">Львівська обл.</option><option value="mykolaiv">Миколаївська обл.</option><option value="odesa">Одеська обл.</option><option value="poltava">Полтавська обл.</option><option value="rivne">Рівненська обл.</option><option value="sumy">Сумська обл.</option><option value="ternopil">Тернопільска обл.</option><option value="kharkiv">Харківська обл.</option><option value="kherson">Херсонська обл.</option><option value="khmelnytsky">Хмельницька обл.</option><option value="сherkasy">Черкаська обл.</option><option value="chernihiv">Чернігівська обл.</option><option value="chernivetska">Чернівецька обл.</option><option value="crimea">АР Крим</option></select>
    </div>

    <div class="form-group">
        <label for="date">Період введеня в дію:
            <abbr title="Для приватного домогосподарства тарифна сітка «зеленого» тарифу будується з урахуванням року, в якому електростанція буде підключена." rel="tooltip" class="tooltip">?</abbr>
        </label> <span id="selected-date"></span>
        <select name="date" id="date" class="form-control"><option value="1" selected="">1 січня 2017 – 31 грудня 2019</option><option value="2">1 січня 2020 – 31 грудня 2024</option><option value="3">1 січня 2025 – 31 грудня 2030</option><option value="1" selected="">1 січня 2017 – 31 грудня 2019</option><option value="2">1 січня 2020 – 31 грудня 2024</option><option value="3">1 січня 2025 – 31 грудня 2030</option></select>
    </div>

    <div style="margin: 36px 0 12px 0;">Результати розрахунків:</div>

    <div class="show-result">

        <div class="show-result-column1">
            <div style="">
                <div style="margin: 0 0 12px 0;"><b>Відсоток енергії, яку можна продати за&nbsp;«зеленим» тарифом:</b></div>
                <div class="rate-circle" data-value="12" style="position: relative; display: block; width: 130px; height: 130px; margin: 0px auto; text-align: center;"><canvas class="rate-circle-back rate-color-back" width="130" height="130"></canvas><canvas class="rate-circle-front rate-color0" width="130" height="130"></canvas><span class="rate-circle-value" style="line-height: 130px; font-size: 18px; color: rgb(112, 181, 88);">85.8%</span></div>
                <div class="param-block">
                    <div class="param-inside">
                        <div class="param-dot" style="background-color: #ffaa3f;"></div>
                        <div class="param-description">Річне споживання об'єкта: <b><span id="selected-year-consumption">2040&nbsp;кВт·год</span></b><br></div>
                    </div>
                    <div class="param-inside">
                        <div class="param-dot" style="background-color: #70b558;"></div>
                        <div class="param-description">Енергія продана за «зеленим» тарифом за&nbsp;рік: <b><span id="selected-green-production">12348&nbsp;кВт·год</span></b><br></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-result-column2">
            <div class="result-block">
                <div style="margin: 0 0 12px 0;"><b>Параметри електростанції:</b></div>
                <div class="result-description"><span>Площа сонячних елементів:</span> <span id="selected-area" class="result-value">76.8&nbsp;м<sup>2</sup></span></div>
                <div class="result-description"><span>Вартість з установкою:</span> <span id="selected-cost" class="result-value">10530&nbsp;євро</span></div>
                <div class="result-description"><span>Середньорічна інсоляція:</span> <span id="selected-insolation" class="result-value">1199&nbsp;кВт/м<sup>2</sup></span></div>
                <div class="result-description"><span>Вироблення сонячної електростанції на рік:</span> <span id="selected-production" class="result-value">14388&nbsp;кВт·год</span></div>
                <div class="result-description"><span>«Зелений» тариф:</span> <span id="selected-rate" class="result-value">0.18&nbsp;євро</span></div>
                <div class="result-description result-description-big"><span>Річний дохід:</span> <span id="selected-profit" class="result-value">1628&nbsp;євро</span></div>
                <div class="result-description result-description-big"><span>Період окупності:</span> <span id="selected-payback" class="result-value">6.5&nbsp;років</span></div>
            </div>
        </div>

    </div>

</div>

<p><span class="slidetext">Даний калькулятор приводить приблизні розрахунки, ціни усереднені і точну калькуляцію можна отримати тільки у фахівців.</p>
<script src="../js/index-calc.js" type="text/javascript"></script>































</div>
<div><img src="../images/green-line-lamp.png" width="400" height="70"></div>
      </div>
<!-- Кінець Слайд 2 -->


<!-- Слайд 3 -->
      <div class="slide3site">
<div><h2 class="h2simple">Наші послуги</h2></div>
<div class="slide3site1">
<div class="slide3site2"><img src="../images/pict-poslugy-key.png" width="30" height="36" border="0"><span class="slidetextbig">Готові рішення</span>
</div>
<div class="slide3site2">
<img src="../images/pict-poslugy-ustanovka.png" width="30" height="36" border="0"><span class="slidetextbig">Установка та запуск</span>
</div>
<div class="slide3site2">
<img src="../images/pict-poslugy-oblugovuvannya.png" width="30" height="36" border="0"><span class="slidetextbig">Супровід та обслуговування</span>
</div>
</div>
</div>
<!-- Кінець Слайд 3 -->
<!-- Початок Слайд 4 варіанти -->
<div class="slide4site">
<div><a name="systems"></a><h3 class="h3simple">Варіанти</h3></div>
 <!--Блок три картинки в ряд-->

        <div class="threePictures">
          <div class="mySpecificPicture">
            <a href="../images/ses-3kvt.png" target="_blank">
              <img src="../images/ses-3kvt.png" />
            </a>
            <h4 class="h4style">
             <span class="h4title">Станція 3кВт</span>
            </h4>
          </div>
          <div class="mySpecificPicture">
            <a href="../images/avtonomna-ses-3kvt.png" target="_blank">
              <img src="../images/avtonomna-ses-3kvt.png"
            /></a>
            <h4 class="h4style"><span class="h4title">Автономна сес 3кВт</span></h4>
          </div>
          <div class="mySpecificPicture">
            <a href="../images/ses-5kvt.png" target="_blank">
              <img src="../images/ses-5kvt.png"
            /></a>
            <h4 class="h4style"><span class="h4title">Станція 5кВт</span></h4>
          </div>
        </div>

        <!--Кінець блоку три картинки в ряд-->
<!--Кнопка варіанти-->
        <div class="placebutton">
          <button class="button-more"><a href="tovary.html">Інші варіанти</a></button>
        </div>

        <!--Кінець блоку кнопка варіанти-->

</div>
<!-- Кінець Слайд 4 варіанти -->


<!-- Початок Слайд 5 етапи -->
<div class="slide5site">
<div><h2 class="h2simple">Етапи роботи</h2></div>
 <!--Блок три картинки в ряд-->

        <div class="threePictures">
          <div class="mySpecificPicture">

              <img src="../images/pict-etap1.png" width="295" height="221" />

            <h4 class="h4style1">
<span class="h4title">1 етап</span></h4>
              <ul class="li-slidetext">
             <li>Визначення потреб в енергозабеспеченні</li>
            <li>
              Виїзд на обєкт для замірів
            </li>
            <li>Підбір обладнання</li>
          </ul>

          </div>
          <div class="mySpecificPicture">
             <img src="../images/pict-etap2.png" width="300" height="221" />
            <h4 class="h4style"><span class="h4title">2 етап</span></h4>
    <ul class="li-slidetext">
             <li>Підписання договору
</li>
            <li>
              Розробка та узгодження рабочого проекту
            </li>
            <li>Комплектація системи</li>
          </ul>
          </div>
          <div class="mySpecificPicture">
            <img src="../images/pict-etap3a.png" width="183"  height="221"  />
            <h4 class="h4style"><span class="h4title">3 етап</span></h4>
 <ul class="li-slidetext">
             <li>Поставка обладнання
</li>
            <li>
              Монтажні роботи
            </li>
            <li>Тестування та запуск системи</li>
          </ul>
          </div>
        </div>

        <!--Кінець блоку три картинки в ряд-->

</div>
<!-- Кінець Слайд 5 етапи -->


<!-- Початок Слайд 6 реалізовані проекти -->
<div class="slide4site">
<div><a name="ourprojects"></a><h2 class="h2simple">Реалізовані проекти</h2></div>

<div class="newPicture"><img src="resources/images/our-objects1-text.jpg"></div>
<!--Кнопка більше проектів-->
        <div class="placebutton">
          <button class="button-more"><a href="tovary.html">Подивитися більше</a></button>
        </div>

        <!--Кінець блоку кнопка більше варіанти-->

</div>
<!-- Кінець Слайд 6 реалізовані проекти -->
<!-- Слайд 7 --><a name="aboutcompany"></a>
      <div class="slide2site">
<h2 class="h3simple">SUN-Tech - надійний партнер в сонячній енергетиці</h2>
 <!--Блок три картинки в ряд-->

        <div class="threePictures">
          <div class="mySpecificPicture1">

              <img src="../images/pict-company-paneli.png" width="90" height="90" />

            <h4 class="h4style1">
<span class="h4title">20 років на ринку</span></h4>


          </div>
          <div class="mySpecificPicture1">
             <img src="../images/pict-company-spesialist-black.png" width="88" height="86" />
            <h4 class="h4style"><span class="h4title">досвідчена команда фахівців</span></h4>

          </div>
          <div class="mySpecificPicture1">
            <img src="../images/pict-company-servis-black.png" width="88"  height="86"  />
            <h4 class="h4style"><span class="h4title">якісний сервіс та супровід</span></h4>

          </div>


 <div class="mySpecificPicture1">

              <img src="../images/pict-company-opyt-black.png" width="885" height="86" />

            <h4 class="h4style1">
<span class="h4title">гарантія на монтаж та устаткування</span></h4>


          </div>
          <div class="mySpecificPicture1">
             <img src="../images/pict-company-brends-black.png" width="88" height="86" />
            <h4 class="h4style"><span class="h4title">тільки відомі світові бренди</span></h4>

          </div>
          <div class="mySpecificPicture1">
            <img src="../images/pict-company-green-tariff.png" width="88"  height="81"  />
            <h4 class="h4style"><span class="h4title">допомога в підключенні та оформленні документів для зеленого тарифу</span></h4>

          </div>



        </div>

        <!--Кінець блоку три картинки в ряд-->

        </div>
<!-- Кінець Слайд 7 -->
<!-- Слайд 8 консультація -->
      <div class="slide8site">

        <div class="newText8">
          <h2 class="h2simple">Залишилися питання?</h2>
          <h3 class="h3simple">Або маєте сумніви в придбанні сонячної електростанції?</h3>
          <p class="slidetext">
            Ми можемо запропонувати Вам готові сонячні електростанції або розробити унікальний проект під ваші особисті потреби, який буде давати Вам прибуток!
          </p>
<!--Кнопка отримати консультацію-->
        <div class="placebutton-yellow">
          <button class="button-more-yellow"><a href="forma-consultation.html">Отримати консультацію</a></button>
        </div>

        <!--Кінець блоку кнопка отримати консультацію-->
        </div>
 <div class="newPicture8">
          <img
            src="../images/consultation.jpg"
            width="600"
            height="400"
          />
        </div>
      </div>
<!-- Кінець Слайд 8 консультація -->
<!-- Футер -->
    <footer class="sitefooter"><a name="contacts"></a>
      <div class="slide-footer-site">
        <div class="newText">
         <h3>Контакти</h3>
          <p class="slidetext">
            вул. Світла, 3<br />Київ, 20350 <br />тел. 044-2404444<br />viber
            0672202020
          </p></div>
	<div class="footernewPicture">
          <img src="../images/sun-tech-logo-lite.png" width="100" height="80"  />
        </div>

          <div class="wideText"><p class="slidetext">
            Компанія SUN-Tech пропонує готові рішення сонячних електростанцій
            різної потужності з установкою обладнання та подальшим
            обслуговуванням.
          </p>
          <p class="slidetext">
            SUN-Tech - комплексний підхід в проектуванні та будівництві,
            допомога в підключенні та оформленні документів для зеленого тарифу.
          </p>
        </div>
        </div>
      <div class="footernewPicture1">
        <h3>Карта проїзду</h3>
        <img src="../images/maps 1.jpg" width="450" height="350" />
      </div>
    </footer>
  <!-- Кінец Контент сторінки -->
    </div>

<script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "menu") {
          x.className += " responsive";
        } else {
          x.className = "menu";
        }
      }
    </script>
  </body>
</html>
