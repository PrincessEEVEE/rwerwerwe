<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <link rel="stylesheet" href="/public/asset/style.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <a href="index.html"><div class="logo col">
            <img src="/public/asset/2645080 1.png" width="100"></a>
            </div>


            <div class="menu col">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="about.html">О компании</a></li>
                    <li><a href="uslugi.html">Услуги</a></li>
                    <li><a href="news.html" class="active">Новости</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
            </div>


            <div class="phone col">
            +7 (123)-456-78-90
            </div>
            
        </div>
        <div class="contant">
            <div class="main-text col">
                <h1>Новости</h1>
                <div class="row-news">

                    @foreach($qq as $key=>$elem)
                    @if($key==$cat)
                    <div class="news-wrap col">
                    <div class="news-item">
                        <div class="news-img-wrap">
                        <a href="news-symbol.html"><img src="/public/asset/img/field.png"></a>
                        </div>
                        <div class="news-item-text">
                        <p class="news-item-date">27.09.22</p>
                        <h2 class="news-item-title">{{$elem["name"]}}</h2>
                        <p class="news-item-excerpt">{{$elem["desc"]}}</p>
                        <p><a href="news-symbol.html"  class="news-item-">{{$elem["cost"]}}</a></p>
                        <p class="news-item-excerpt">{{$elem["inStock"]}}</p>
                        <p class="news-item-excerpt">{{$elem["desc"]}}</p>
                        </div>
                    </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="clear"></div>
                
                </div>
        </div>
        <div class="footer col">

                    <p>Аппинг Леонид</p>
                    <p>эИСП-9.7</p>
                    
                
        </div>
        
    

    

</body>

</html>