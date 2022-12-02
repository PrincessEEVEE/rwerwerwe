<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/public/asset/style.css">
    <link rel="icon" href="2645080 1.png">
</head>

<body>
 <div class="container">
      <div class="header">
        <a href="index.html">
            <div class="logo col">
                <img src="img/logo.png"></a>
      </div>

            <div class="menu col">
                <ul>
                    <li><a href="">О Кружавино</a></li>
                    <li><a href="">Галерея</a></li>
                    <li><a href="">Проекты</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </div>


            <div class="phone col">
                +7 (3812) 63 63 08
            </div>

            <div class="ex">
                <a href="">
                    Записаться на экскурсию
                </a>
            </div>
            <div class="clear"></div>

            <div class="main-text col">
            	@yield('content')
                



            </div>

            <div class="main-pic col">
                <img src="img/mainp.jpg">
            </div>
            <div class="clear"></div>


            <div class="bigp col">
                <img src="img/bigp.jpg">
            </div>

            <div class="bigt col">
                <h2 class="bigt-col">О Кружавино</h2>

                <p class="main-text-title">Микрорайон комплексной застройки «Кружавино» от застройщика ООО «Миллидом».</p>

                <p class="main-text-title">Имеется аккредитация от АО «Россельхозбанк»Имеется аккредитация от АО «Россельхозбанк». Имеется аккредитация от АО «Россельхозбанк»</p>

                <p class="main-text-title">Любой из проектов готовых домов доступен по государственной программе сельская ипотека.</p>

                <p class="main-text-title">Возможно оформление через ПАО «Сбербанк». Подробности уточняйте у менеджеров.</p>
            </div>
            <div class="clear"></div>

            



        </div>
    </div>
    <div class="fullp">
        <img src="img/fullp.jpg">
    </div>


    </body>

    </html>