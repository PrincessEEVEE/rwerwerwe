<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/public/asset/style.css">
    <link rel="icon" href="/public/asset/2645080 1.png">
</head>

<body>

    <div class="container">
        <div class="header">
            <a href="index.html"><div class="logo col">
            <img src="/public/asset/2645080 1.png" width="100"></a>
            </div>




            <div class="menu col">
                <ul>
                	@foreach($ll as $elem)
                	@if($elem["active"]==1)
                    <li><a href="{{$elem["href"]}}" class="active">{{$elem["text"]}}</a></li>
                    @else
                    <li><a href="{{$elem["href"]}}" >{{$elem["text"]}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div>


            <div class="phone col">
            +7 (123)-456-78-90
            </div>
            
        </div>
        <div class="contant">
            <img src="/public/asset/img/11 1.png" class="main-pic" atl="Ãîðû">
            <div class="main-text col">
                <h1>Главная</h1>
                <p class="size">Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.</p>

        </div>
        <div class="footer col">

                    <p>Аппинг Леонид</p>
                    <p>эИСП-9.7</p>
                    
                
        </div>
        
    

    

</body>

</html>