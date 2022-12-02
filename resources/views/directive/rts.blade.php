<!DOCTYPE html>  
<html>  
<head>  
<title>Direct view</title>  
</head>  
<body>  
@if ($numofd==7)
Выходной
@elseif ($numofd==6)
Выходной
@endif
</br>
@if ($day==6 or $day==7)
Вы ввели выходной день
@else 
Вы ввели рабочий день недели
@endif
</br>
@if($month==12 || $month==1 || $month==2)
Зима
@elseif($month==3 || $month==4 || $month==5)
Весна
@elseif($month==6 || $month==7 || $month==8)
Лето
@elseif($month==9 || $month==10 || $month==11)
Осень
@else
Вы ввели несуществующий месяц
@endif
</br>
@unless($age>18)
Вы несовершеннолетний
@endunless
</br>
@if(count($arr)>0)
@php
echo count($arr)
@endphp
@else
В массиве нет записей
@endif
</body> 
</html>	
