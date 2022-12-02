<!DOCTYPE html>
<html>
<head>
    <title>{{$qq["title"]}}</title>
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
                	@foreach($ww as $key=> $elem)

                	@if($key==$id)
                    <li><a href="/public/page/{{$key}}" class="active">{{$elem["title"]}}</a></li>
                    @else
                    <li><a href="/public/page/{{$key}}" >{{$elem["title"]}}</a></li>
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
                <p class="size">{{$qq["text"]}}</p>

        </div>
        <div class="footer col">

                    <p>Аппинг Леонид</p>
                    <p>эИСП-9.7</p>
                    
                
        </div>
        
    

    

</body>

</html>